/*global htmlEncode, VuFind */
/*exported collapseTopFacets, initFacetTree */
function buildFacetNodes(data, currentPath, allowExclude, excludeTitle, counts, claims) {
  var json = [];
  var claims = claims || false;

  $(data).each(function facetNodesEach() {
    var claim = '';
    if(claims && this.rawText in claims ) {
      claim = claims[this.rawText];
    }
    var html = '<div title="' + htmlEncode(claim) + '" class="list-group-item has-tooltip theme-' + this.rawText + ' ' + (this.isApplied ? ' applied' : '') + '">';
    if (!this.isApplied && counts) {
      html += '<span class="badge" style="float: right;padding-right: 5px;">' + this.count.toString().replace(/\B(?=(\d{3})+\b)/g, VuFind.translate('number_thousands_separator'));
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
    html += '<span class="main ' + (this.isApplied ? ' applied' : '') + '" role="menuitem" onclick="document.location.href=\'' + url + '\'; return false;">';
    if (this.operator === 'OR') {
      if (this.isApplied) {
        html += '<i class="fa fa-check-square-o" title="' + VuFind.translate('Selected') + '"></i>';
      } else {
        html += '<i class="fa fa-square-o" aria-hidden="true"></i>';
      }
    } else if (this.isApplied) {
      html += '<i class="fa fa-check pull-right" title="' + VuFind.translate('Selected') + '"></i>';
    }
    html += ' ' + this.displayText;
    html += '</span>';

    html += '</div>';
    var children = null;
    if (typeof this.children !== 'undefined' && this.children.length > 0) {
      children = buildFacetNodes(this.children, currentPath, allowExclude, excludeTitle, counts, claims);
    }
    json.push({
      'text': html,
      'children': children,
      'applied': this.isApplied,
      'state': {
        'opened': this.hasAppliedChildren
      },
      'li_attr': this.isApplied ? {
        'class': 'active'
      } : {},
      'data': {
        'url': url.replace(/&amp;/g, '&')
      }
    });
  });

  return json;
}

function initFacetTree(treeNode, inSidebar) {
  var loaded = treeNode.data('loaded');
  if (loaded) {
    return;
  }
  treeNode.data('loaded', true);

  // Enable keyboard navigation also when a screen reader is active
  treeNode.bind('select_node.jstree', function selectNode(event, data) {
    window.location = data.node.data.url;
    event.preventDefault();
    return false;
  });

  var facet = treeNode.data('facet');
  var claims = treeNode.data('claims');
  var operator = treeNode.data('operator');
  var currentPath = treeNode.data('path');
  var allowExclude = treeNode.data('exclude');
  var excludeTitle = treeNode.data('exclude-title');
  var sort = treeNode.data('sort');
  var query = window.location.href.split('?')[1];

  if (inSidebar) {
    treeNode.prepend('<li><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></li>');
  } else {
    treeNode.prepend('<div><i class="fa fa-spinner fa-spin" aria-hidden="true"></i><div>');
  }

  $.getJSON(VuFind.path + '/AJAX/JSON?' + query, {
      method: "getFacetData",
      facetName: facet,
      facetSort: sort,
      facetOperator: operator
    },
    function getFacetData(response /*, textStatus*/ ) {
      if (response.status === "OK") {
        var results = buildFacetNodes(response.data, currentPath, allowExclude, excludeTitle, inSidebar, claims);
        treeNode.find('.fa-spinner').parent().remove();
        if (inSidebar) {
          treeNode.on('loaded.jstree open_node.jstree', function treeNodeOpen( /*e, data*/ ) {
            treeNode.find('ul.jstree-container-ul > li.jstree-node');
          });
          treeNode.on('ready.jstree', function() {
            treeNode.jstree('open_all');
            $(treeNode).find('.has-tooltip').tooltip({
              placement: ($(window).width() > 767) ? 'right' : 'auto'
            });
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

function collapseTopFacets() {
  $('.top-facets').each(function setupToCollapses() {
    $(this).find('.collapse').removeClass('in');
    $(this).on('show.bs.collapse', function toggleTopFacet() {
      $(this).find('.top-title .fa').removeClass('fa-caret-right');
      $(this).find('.top-title .fa').addClass('fa-caret-down');
    });
    $(this).on('hide.bs.collapse', function toggleTopFacet() {
      $(this).find('.top-title .fa').removeClass('fa-caret-down');
      $(this).find('.top-title .fa').addClass('fa-caret-right');
    });
  });
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

  return {
    setup: setup
  };
});
