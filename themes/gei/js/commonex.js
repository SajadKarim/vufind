/*global grecaptcha, isPhoneNumberValid */
/*exported VuFind, htmlEncode, deparam, moreFacets, lessFacets, phoneNumberFormHandler, recaptchaOnLoad, bulkFormHandler */

// IE 9< console polyfill
window.console = window.console || {log: function polyfillLog() {}};

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


