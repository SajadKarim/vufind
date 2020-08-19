/*global grecaptcha, isPhoneNumberValid */
/*exported VuFind, htmlEncode, deparam, moreFacets, lessFacets, phoneNumberFormHandler, recaptchaOnLoad, bulkFormHandler */

// IE 9< console polyfill
window.console = window.console || {log: function polyfillLog() {}};

var VuFind = (function VuFind() {
  var defaultSearchBackend = null;
  var path = null;
  var _initialized = false;
  var _submodules = [];
  var _translations = {};

  var register = function register(name, module) {
    if (_submodules.indexOf(name) === -1) {
      _submodules.push(name);
      this[name] = typeof module == 'function' ? module() : module;
    }
    // If the object has already initialized, we should auto-init on register:
    if (_initialized && this[name].init) {
      this[name].init();
    }
  };
  var init = function init() {
    for (var i = 0; i < _submodules.length; i++) {
      if (this[_submodules[i]].init) {
        this[_submodules[i]].init();
      }
    }
    _initialized = true;
  };

  var addTranslations = function addTranslations(s) {
    for (var i in s) {
      if (s.hasOwnProperty(i)) {
        _translations[i] = s[i];
      }
    }
  };
  var translate = function translate(op) {
    return _translations[op] || op;
  };

  /**
   * Reload the page without causing trouble with POST parameters while keeping hash
   */
  var refreshPage = function refreshPage() {
    var parts = window.location.href.split('#');
    if (typeof parts[1] === 'undefined') {
      window.location.href = window.location.href;
    } else {
      var href = parts[0];
      // Force reload with a timestamp
      href += href.indexOf('?') === -1 ? '?_=' : '&_=';
      href += new Date().getTime() + '#' + parts[1];
      window.location.href = href;
    }
  };

  //Reveal
  return {
    defaultSearchBackend: defaultSearchBackend,
    path: path,

    addTranslations: addTranslations,
    init: init,
    refreshPage: refreshPage,
    register: register,
    translate: translate
  };
})();

/* --- GLOBAL FUNCTIONS --- */
function htmlEncode(value) {
  if (value) {
    return $('<div />').text(value).html();
  } else {
    return '';
  }
}
function extractClassParams(selector) {
  var str = $(selector).attr('class');
  if (typeof str === "undefined") {
    return [];
  }
  var params = {};
  var classes = str.split(/\s+/);
  for (var i = 0; i < classes.length; i++) {
    if (classes[i].indexOf(':') > 0) {
      var pair = classes[i].split(':');
      params[pair[0]] = pair[1];
    }
  }
  return params;
}
// Turn GET string into array
function deparam(url) {
  if (!url.match(/\?|&/)) {
    return [];
  }
  var request = {};
  var pairs = url.substring(url.indexOf('?') + 1).split('&');
  for (var i = 0; i < pairs.length; i++) {
    var pair = pairs[i].split('=');
    var name = decodeURIComponent(pair[0].replace(/\+/g, ' '));
    if (name.length === 0) {
      continue;
    }
    if (name.substring(name.length - 2) === '[]') {
      name = name.substring(0, name.length - 2);
      if (!request[name]) {
        request[name] = [];
      }
      request[name].push(decodeURIComponent(pair[1].replace(/\+/g, ' ')));
    } else {
      request[name] = decodeURIComponent(pair[1].replace(/\+/g, ' '));
    }
  }
  return request;
}

// Sidebar
function moreFacets(id) {
  $('.' + id).removeClass('hidden');
  $('#more-' + id).addClass('hidden');
  return false;
}
function lessFacets(id) {
  $('.' + id).addClass('hidden');
  $('#more-' + id).removeClass('hidden');
  return false;
}
function facetSessionStorage(e) {
  var source = $('#result0 .hiddenSource').val();
  var id = e.target.id;
  var key = 'sidefacet-' + source + id;
  if (!sessionStorage.getItem(key)) {
    sessionStorage.setItem(key, document.getElementById(id).className);
  } else {
    sessionStorage.removeItem(key);
  }
}

// Phone number validation
function phoneNumberFormHandler(numID, regionCode) {
  var phoneInput = document.getElementById(numID);
  var number = phoneInput.value;
  var valid = isPhoneNumberValid(number, regionCode);
  if (valid !== true) {
    if (typeof valid === 'string') {
      valid = VuFind.translate(valid);
    } else {
      valid = VuFind.translate('libphonenumber_invalid');
    }
    $(phoneInput).siblings('.help-block.with-errors').html(valid);
    $(phoneInput).closest('.form-group').addClass('sms-error');
    return false;
  } else {
    $(phoneInput).closest('.form-group').removeClass('sms-error');
    $(phoneInput).siblings('.help-block.with-errors').html('');
  }
}

// Setup captchas after Google script loads
function recaptchaOnLoad() {
  if (typeof grecaptcha !== 'undefined') {
    var captchas = $('.g-recaptcha:empty');
    for (var i = 0; i < captchas.length; i++) {
      $(captchas[i]).data('captchaId', grecaptcha.render(captchas[i], $(captchas[i]).data()));
    }
  }
}

function bulkFormHandler(event, data) {
  if ($('.checkbox-select-item:checked,checkbox-select-all:checked').length === 0) {
    VuFind.lightbox.alert(VuFind.translate('bulk_noitems_advice'), 'danger');
    return false;
  }
  for (var i in data) {
    if ('print' === data[i].name) {
      return true;
    }
  }
}

// Ready functions
function setupOffcanvas() {
  if ($('.sidebar').length > 0) {
    $('[data-toggle="offcanvas"]').click(function offcanvasClick() {
      $('body.offcanvas').toggleClass('active');
      var active = $('body.offcanvas').hasClass('active');
      var right = $('body.offcanvas').hasClass('offcanvas-right');
      if ((active && !right) || (!active && right)) {
        $('.offcanvas-toggle .fa').removeClass('fa-chevron-right').addClass('fa-chevron-left');
      } else {
        $('.offcanvas-toggle .fa').removeClass('fa-chevron-left').addClass('fa-chevron-right');
      }
      $('.offcanvas-toggle .fa').attr('title', VuFind.translate(active ? 'sidebar_close' : 'sidebar_expand'));
    });
    $('[data-toggle="offcanvas"]').click().click();
  } else {
    $('[data-toggle="offcanvas"]').addClass('hidden');
  }
}

function setupAutocomplete() {
  // Search autocomplete
  $('.autocomplete').each(function autocompleteSetup(i, op) {
    $(op).autocomplete({
      maxResults: 10,
      loadingString: VuFind.translate('loading') + '...',
      handler: function vufindACHandler(input, cb) {
        var query = input.val();
        var searcher = extractClassParams(input);
        var hiddenFilters = [];
		var appliedFilters = [];//scheel
		var type = searcher.type ? searcher.type : $(input).closest('.searchForm').find('.searchForm_type').val();

		if(type=='_AllFields'){//scheel: disabled (type=='AllFields')
			/**
			 * scheel:
			 * We don't use Solr or any index. Instead we search for facets on the page und suggest facet entries,
			 * which are already translated.
			 */
			 var datums = [];
			 var facetName;
			 var opened = [];
			 $(".jstree-node").each(function( index ) {
				 if($( this ).hasClass( "jstree-closed" )){
					$( this ).jstree('open_all');//open hierarchical options to be able to suggest/find them
					opened[opened.length] = $( this );//remember which have been opened
				 }
			 });
			 $("#front-page-facets-div > div").each(function( index ) {
				  facetName = $( this ).children('h2').first().text();
				  pushLinks($( this ),datums,facetName,query);
			 });
			 $("[id^=side\\-panel\\-]").each(function( index ) {
				facetName = $( this ).children('.title').first().text().trim();
				pushLinks($( this ),datums,facetName,query);
			 });
			 for (var j = 0; j < opened.length; j++) {
				opened[j].jstree('close_all');//close those that were opened
			 }
			 cb(datums);
		}else{
			$(input).closest('.searchForm').find('input[name="hiddenFilters[]"]').each(function hiddenFiltersEach() {
			  hiddenFilters.push($(this).val());
			});
			$(input).closest('.searchForm').find('input[name="filter[]"]').each(function() {
			  appliedFilters.push($(this).val());
			});
			$.fn.autocomplete.ajax({
			  url: VuFind.path + '/AJAX/JSON',
			  data: {
				q: query,
				method: 'getACSuggestions',
				searcher: searcher.searcher,
				type: type,
				hiddenFilters: hiddenFilters,
				appliedFilters: appliedFilters
			  },
			  dataType: 'json',
			  success: function autocompleteJSON(json) {
				if (json.data.length > 0) {
				  var datums = [];
				  for (var j = 0; j < json.data.length; j++) {
					  console.log(json.data[j]);
					//datums.push(json.data[j]);
				  //split = json.data[j].split(":");
				  if(json.data[j].value != null){
					  value = json.data[j].value;
				  }else{
					  value = json.data[j];
				  }
				  if(json.data[j].label != null){
					  label = json.data[j].label;
				  }else{
					  label = json.data[j];
				  }
				  //if(split.length==2){//scheel: todo does the index field split[0] exist? (maybe check if in translate?)
				  //  label = VuFind.translate(split[0])+':'+split[1];
				  //}
				  //href = document.location+((document.location+'').indexOf("?")==-1?"Search/Results?":"&")+'filter%5B%5D='+encodeURI(value);
				  
				  
				  var path = VuFind.path;
				  href = ((document.location+'').indexOf("Search/Results?")==-1?path + "/Search/Results?":document.location+"&")+'filter%5B%5D='+encodeURI(value);
				  exclude = ((document.location+'').indexOf("Search/Results?")==-1?path + "/Search/Results?":document.location+"&")+'filter%5B%5D=-'+encodeURI(value);
				  datums.push({//scheel
					  value: value,
					  label: label,
					  href: href,
					  exclude: exclude,
					  excludeTrans: VuFind.translate('exclude_facet'),
					  label_value: json.data[j].label_value,
					  label_type: json.data[j].label_type,
					  count: json.data[j].count
					  });
				  }
				  cb(datums);
				} else {
				  cb([]);
				}
			  }
			});
		}
      }
    });
  });
  // Update autocomplete on type change
  $('.searchForm_type').change(function searchTypeChange() {
    var $lookfor = $(this).closest('.searchForm').find('.searchForm_lookfor[name]');
    $lookfor.autocomplete('clear cache');
  });
}

function pushLinks(thisObj,datums,facetName,query) {
	try {
		var facetValueName;
		var s;
		thisObj.find('a').each(function( index2 ) {
			//facetValueName = $( this ).text();
			facetValueName = $( this ).clone().find('.badge').remove().end().text();//remove elements of clas badge (number of results) first
			var l = facetValueName.toLowerCase().indexOf(query.toLowerCase());
			if(l!=-1){
				var href = $( this ).attr('href');
				if(href=='#'){
					var on = $( this ).find('span[onclick]').first().attr('onclick');
					if(on.startsWith("document.location.href=")){
						
						s = on.substring(23,24);
						on = on.substring(24);
						if(on.indexOf(s)!=-1){	
							href = on.substring(0,on.indexOf(s));	
						}
					}
				}
				var label = "<span>"+facetName+"</span>"+": "+facetValueName.substring(0,l)+"<b>"+facetValueName.substring(l,l+query.length)+"</b>"+facetValueName.substring(l+query.length);
				datums.push({
					  value: facetValueName,
					  label: label,
					  href: href
				});
			}
		});
	}catch(err) {
		console.log(err.message);
	}
}

/**
 * Handle arrow keys to jump to next record
 */
function keyboardShortcuts() {
  var $searchform = $('.searchForm_lookfor');
  if ($('.pager').length > 0) {
    $(window).keydown(function shortcutKeyDown(e) {
      if (!$searchform.is(':focus')) {
        var $target = null;
        switch (e.keyCode) {
        case 37: // left arrow key
          $target = $('.pager').find('a.previous');
          if ($target.length > 0) {
            $target[0].click();
            return;
          }
          break;
        case 38: // up arrow key
          if (e.ctrlKey) {
            $target = $('.pager').find('a.backtosearch');
            if ($target.length > 0) {
              $target[0].click();
              return;
            }
          }
          break;
        case 39: //right arrow key
          $target = $('.pager').find('a.next');
          if ($target.length > 0) {
            $target[0].click();
            return;
          }
          break;
        case 40: // down arrow key
          break;
        }
      }
    });
  }
}

/**
 * Setup facets
 */
function setupFacets() {
  // Advanced facets
  $('.facetAND a,.facetOR a').click(function facetBlocking() {
    $(this).closest('.collapse').html('<div class="list-group-item">' + VuFind.translate('loading') + '...</div>');
    window.location.assign($(this).attr('href'));
  });

  // Side facet status saving
  $('.facet.list-group .collapse').each(function openStoredFacets(index, item) {
    var source = $('#result0 .hiddenSource').val();
    var storedItem = sessionStorage.getItem('sidefacet-' + source + item.id);
    if (storedItem) {
      var saveTransition = $.support.transition;
      try {
        $.support.transition = false;
        if ((' ' + storedItem + ' ').indexOf(' in ') > -1) {
          $(item).collapse('show');
        } else {
          $(item).collapse('hide');
        }
      } finally {
        $.support.transition = saveTransition;    
      }
    }
  });
  $('.facet.list-group .collapse').on('shown.bs.collapse', facetSessionStorage);
  $('.facet.list-group .collapse').on('hidden.bs.collapse', facetSessionStorage);
}

function setupIeSupport() {
  // Disable Bootstrap modal focus enforce on IE since it breaks Recaptcha.
  // Cannot use conditional comments since IE 11 doesn't support them but still has
  // the issue
  var ua = window.navigator.userAgent;
  if (ua.indexOf('MSIE') || ua.indexOf('Trident/')) {
    $.fn.modal.Constructor.prototype.enforceFocus = function emptyEnforceFocus() { };
  }
}

$(document).ready(function commonDocReady() {
  // Start up all of our submodules
  VuFind.init();
  // Setup search autocomplete
  setupAutocomplete();
  // Off canvas
  setupOffcanvas();
  // Keyboard shortcuts in detail view
  keyboardShortcuts();

  // support "jump menu" dropdown boxes
  $('select.jumpMenu').change(function jumpMenu(){ $(this).parent('form').submit(); });

  // Checkbox select all
  $('.checkbox-select-all').change(function selectAllCheckboxes() {
    $(this).closest('form').find('.checkbox-select-item').prop('checked', this.checked);
  });
  $('.checkbox-select-item').change(function selectAllDisable() {
    $(this).closest('form').find('.checkbox-select-all').prop('checked', false);
  });

  // handle QR code links
  $('a.qrcodeLink').click(function qrcodeToggle() {
    if ($(this).hasClass("active")) {
      $(this).html(VuFind.translate('qrcode_show')).removeClass("active");
    } else {
      $(this).html(VuFind.translate('qrcode_hide')).addClass("active");
    }

    var holder = $(this).next('.qrcode');
    if (holder.find('img').length === 0) {
      // We need to insert the QRCode image
      var template = holder.find('.qrCodeImgTag').html();
      holder.html(template);
    }
    holder.toggleClass('hidden');
    return false;
  });

  // Print
  var url = window.location.href;
  if (url.indexOf('?' + 'print' + '=') !== -1 || url.indexOf('&' + 'print' + '=') !== -1) {
    $("link[media='print']").attr("media", "all");
    $(document).ajaxStop(function triggerPrint() {
      window.print();
    });
    // Make an ajax call to ensure that ajaxStop is triggered
    $.getJSON(VuFind.path + '/AJAX/JSON', {method: 'keepAlive'});
  }

  setupFacets();

  // retain filter sessionStorage
  $('.searchFormKeepFilters').click(function retainFiltersInSessionStorage() {
    sessionStorage.setItem('vufind_retain_filters', this.checked ? 'true' : 'false');
  });
  if (sessionStorage.getItem('vufind_retain_filters')) {
    var state = (sessionStorage.getItem('vufind_retain_filters') === 'true');
    $('.searchFormKeepFilters').prop('checked', state);
    $('.applied-filter').prop('checked', state);
  }

  setupIeSupport();
});
