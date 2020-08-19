/*global htmlEncode, VuFind */
/*exported initFacetTree */
function buildFacetNodes(data, currentPath, allowExclude, excludeTitle, counts)
{
  var json = [];

  $(data).each(function facetNodesEach() {
	//console.log(this);
    var html = '';
    if (!this.isApplied && counts && typeof this.count !== 'undefined') {//scheel: added typeof this.count !== 'undefined'
      html = '<span class="right"><span class="badge" style="float: unset">' + this.count.toString().replace(/\B(?=(\d{3})+\b)/g, VuFind.translate('number_thousands_separator'))+'</span>';
      if (allowExclude) {
        var excludeURL = currentPath + this.exclude;
        excludeURL.replace("'", "\\'");
        // Just to be safe
        html += ' <a href="' + excludeURL + '" onclick="document.location.href=\'' + excludeURL + '\'; return false;" title="' + htmlEncode(excludeTitle) + '"><i class="fa fa-times" title="' + VuFind.translate('Selected') + '"></i></a>';
      }
      html += '</span>';
    }

    var url = currentPath + this.href;
    // Just to be safe
    url.replace("'", "\\'");
    html += '<span class="main' + (this.isApplied ? ' applied' : '') + (this.displayText===VuFind.translate('Unknown') ? ' unknown_count' : '') + '" title="' + htmlEncode(this.displayText) + '"' //scheel: added unknown_count
      + ' onclick="document.location.href=\'' + url + '\'; return false;">';
    if (this.operator === 'OR') {
      if (this.isApplied) {
        html += '<i class="fa fa-check-square-o" title="' + VuFind.translate('Selected') + '"></i>';
      } else {
        html += '<i class="fa fa-square-o" aria-hidden="true"></i>';
      }
    } else if (this.isApplied) {
      html += '<i class="fa fa-check pull-right" title="' + VuFind.translate('Selected') + '"></i>';
    }

	//console.log('#001#',this.displayText);
	//console.log('#2#',VuFind.translate(this.displayText));
    html += ' ' + this.displayText;
    html += '</span>';

    var children = null;
    if (typeof this.children !== 'undefined' && this.children.length > 0) {
      children = buildFacetNodes(this.children, currentPath, allowExclude, excludeTitle, counts);
    }
    json.push({
      'text': html,
      'children': children,
      'applied': this.isApplied,
      'state': {
        'opened': this.hasAppliedChildren
      },
      'li_attr': this.isApplied ? { 'class': 'active' } : {}
    });
  });

  return json;
}

function initFacetTree(treeNode, inSidebar)
{
  var loaded = treeNode.data('loaded');
  if (loaded) {
    return;
  }
  treeNode.data('loaded', true);

  var facet = treeNode.data('facet');
  var operator = treeNode.data('operator');
  var currentPath = treeNode.data('path');
  var allowExclude = treeNode.data('exclude');
  var excludeTitle = treeNode.data('exclude-title');
  var sort = treeNode.data('sort');
  var query = window.location.href.split('?')[1];

  if (inSidebar) {
    treeNode.prepend('<li class="list-group-item"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></li>');
  } else {
    treeNode.prepend('<div><i class="fa fa-spinner fa-spin" aria-hidden="true"></i><div>');
  }
  $.getJSON(VuFind.path + '/AJAX/JSON?' + query,
    {
      method: "getFacetData",
      facetName: facet,
      facetSort: sort,
      facetOperator: operator
    },
    function getFacetData(response/*, textStatus*/) {
      if (response.status === "OK") {
        var results = buildFacetNodes(response.data, currentPath, allowExclude, excludeTitle, inSidebar);
        treeNode.find('.fa-spinner').parent().remove();
        if (inSidebar) {
			
          treeNode.on('loaded.jstree open_node.jstree', function treeNodeOpen(/*e, data*/) {
            treeNode.find('ul.jstree-container-ul > li.jstree-node').addClass('list-group-item');
          });
		  treeNode.on('ready.jstree', function() {
				//scheel: add 'more ...'
				
				treeNode.find('ul.jstree-container-ul > .unknown_count').detach();
//				treeNode.find('ul.jstree-container-ul > li.jstree-node:gt(9)').addClass('hidden');
//				treeNode.find('ul.jstree-container-ul > li.jstree-node:gt(9)').addClass('narrowGroupHidden-'+facet);
//				if($("ul.jstree-container-ul > li.jstree-node.hidden").length > 0){
	//alert(facet+'\n'+$("#facet_"+facet+" > ul.jstree-container-ul > li.jstree-node:gt(9)").length);
				if($("#facet_"+facet+" > ul.jstree-container-ul > li.jstree-node:gt(9)").length > 0){
					$("#facet_"+facet).find('ul.jstree-container-ul > li.jstree-node:gt(9)').addClass('hidden');
					$("#facet_"+facet).find('ul.jstree-container-ul > li.jstree-node:gt(9)').addClass('narrowGroupHidden-'+facet);
					var unknownCount = $("#facet_"+facet+" > ul.jstree-container-ul > li.jstree-node:has(.unknown_count)").remove();
//					console.log('#00001',unknownCount);
//					unknownCount.addClass('hidden');
					$("#facet_"+facet).find('ul.jstree-container-ul').append(unknownCount);
					$("#facet_"+facet).find('ul.jstree-container-ul').append( "<li id='more-narrowGroupHidden-"+facet+"' class='list-group-item narrow-toggle' href='#' onclick='return moreFacets(&quot;narrowGroupHidden-"+facet+"&quot;)'>"+VuFind.translate('more')+" ...</li>" );
					//$("#facet_"+facet).find('ul.jstree-container-ul').
					$("#facet_"+facet).find('ul.jstree-container-ul').append( "<li class='list-group-item narrow-toggle narrowGroupHidden-"+facet+" hidden' href='#' onclick='return lessFacets(&quot;narrowGroupHidden-"+facet+"&quot;)'>"+VuFind.translate('less')+" ...</li>" );
				}else{
					var unknownCount = $("#facet_"+facet+" > ul.jstree-container-ul > li.jstree-node:has(.unknown_count)").remove();
					$("#facet_"+facet).find('ul.jstree-container-ul').append(unknownCount);
				}
		   });
		   
        }else{
			treeNode.on('ready.jstree', function() {
				//scheel: country_of_use_hierarchical_str_mv stays closed
				if(facet !== 'country_of_use_hierarchical_str_mv'){
					treeNode.jstree('open_all');
				}
			});	
		}
        treeNode.jstree({
          'core': {
            'data': results
          }
        });
		
      }
    }
  );
}

/* --- Lightbox Facets --- */
VuFind.register('lightbox_facets', function LightboxFacets() {
  function lightboxFacetSorting() {
    var sortButtons = $('.js-facet-sort');
    function sortAjax(button) {
      var sort = $(button).data('sort');
      var list = $('#facet-list-' + sort);
      if (list.find('.js-facet-item').length === 0) {
        list.find('.js-facet-next-page').text(VuFind.translate('loading') + '...');
        $.ajax(button.href + '&layout=lightbox')
          .done(function facetSortTitleDone(data) {
            list.prepend($('<span>' + data + '</span>').find('.js-facet-item'));
            list.find('.js-facet-next-page').text(VuFind.translate('more') + ' ...');
          });
      }
      $('.full-facet-list').addClass('hidden');
      list.removeClass('hidden');
      sortButtons.removeClass('active');
    }
    sortButtons.click(function facetSortButton() {
      sortAjax(this);
      $(this).addClass('active');
      return false;
    });
  }

  function setup() {
    lightboxFacetSorting();
    $('.js-facet-next-page').click(function facetLightboxMore() {
      var button = $(this);
      var page = parseInt(button.attr('data-page'), 10);
      if (button.attr('disabled')) {
        return false;
      }
      button.attr('disabled', 1);
      button.text(VuFind.translate('loading') + '...');
      $.ajax(this.href + '&layout=lightbox')
        .done(function facetLightboxMoreDone(data) {
          var htmlDiv = $('<div>' + data + '</div>');
          var list = htmlDiv.find('.js-facet-item');
          button.before(list);
          if (list.length && htmlDiv.find('.js-facet-next-page').length) {
            button.attr('data-page', page + 1);
            button.attr('href', button.attr('href').replace(/facetpage=\d+/, 'facetpage=' + (page + 1)));
            button.text(VuFind.translate('more') + ' ...');
            button.removeAttr('disabled');
          } else {
            button.remove();
          }
        });
      return false;
    });
    var margin = 230;
    $('#modal').on('show.bs.modal', function facetListHeight() {
      $('#modal .lightbox-scroll').css('max-height', window.innerHeight - margin);
    });
    $(window).resize(function facetListResize() {
      $('#modal .lightbox-scroll').css('max-height', window.innerHeight - margin);
    });
  }

  return { setup: setup };
});
