var Pricing = (function () {

  // Work with upcase locales internally. Allow user to specify in either case (i.e. in URLs).
  var DEFAULT_LOCALE = 'GB';

  // index 1 = basic/starter
  // index 2 = business/standard
  // index 3 = corporate/expert
  // index 4 = pro
  // index 4 = ultimate
  var PRICES = {
      'GB' : ['-', '£299', '£999' ]
    , 'US' : ['-', '$499', '$1499']
    , 'AU' : ['-', '$599', '$1999']
    , 'NZ' : ['-', '$650', '$2250']
  };

  var SIGNUP_URL_TEMPLATE = "https://signup.customersure.com/{{locale}}/{{plan}}/{{append}}";

  var SIGNUP_URL_PARAMS = {
      'GB' : { url_locale: 'en', url_currency: '' }
    , 'US' : { url_locale: 'en-US', url_currency: '' }
    , 'AU' : { url_locale: 'en', url_currency: '?currency=AUD' }
    , 'NZ' : { url_locale: 'en', url_currency: '?currency=NZD' }
  };

  var DEFAULT_SIGNUP_URL_PARAMS = { url_locale: 'en-US', url_currency: '' };

  var init = function () {
    setup_event_handlers();
    internationalize_prices(cur_locale() || DEFAULT_LOCALE);
  };

  var setup_event_handlers = function () {
    if(is_ppp_root()) {
      $('body').on('click', '#currency_switcher a[data-locale]', change_locale_handler);
    }
  };

  var change_locale_handler = function(e) {
    e.preventDefault();
    $tgt = $(e.target);
    var locale = $tgt.attr('data-locale');
    change_locale(locale);
  };

  var change_locale = function(locale) {
    document.location.hash = locale;
    internationalize_prices(locale);
  }

  var internationalize_prices = function (locale) {
    if(!is_ppp_root()) {
      return;
    }
    var prices = PRICES[locale];
    // Set correct price.
    $.each([0,1,2], function (idx, value) {
      $('.software-price-' + value).html('<span class="currency_symbol">' + prices[value].charAt(0) + '</span><span class="cost">' + prices[value].slice(1) + '</span><span class="period">/month</span>');
    });

    rewrite_signup_urls(locale);
    set_locale_menu(locale);
  };

  var is_ppp_root = function() {
    return document.location.pathname.split('/').length === 3
  };

  var rewrite_signup_urls = function (locale) {
    var url_params = locale_is_allowed(locale) ? SIGNUP_URL_PARAMS[locale] : DEFAULT_SIGNUP_URL_PARAMS;
    $('[data-signup-to]').each(function(idx) {
      $this = $(this)
      var plan_name = $this.attr('data-signup-to');
      var url = SIGNUP_URL_TEMPLATE.replace('{{locale}}', url_params['url_locale']);
      url = url.replace('{{plan}}', plan_name);
      url = url.replace('{{append}}', url_params['url_currency']);
      $this.attr('href', url);
    });
  };

  var cur_locale = function() {
    if(document.location.hash != ''
      && locale_is_allowed(document.location.hash.substring(1).toUpperCase())) {
      return document.location.hash.substring(1).toUpperCase();
    } else {
     return $.cookie('country');
    }
  };

  var locale_is_allowed = function(locale) {
    return $.inArray(locale, allowed_locales()) != -1
  };

  var allowed_locales = function() {
    var locales = [];
    for(k in PRICES) { locales.push(k); }
    return locales;
  };

  var set_locale_menu = function(locale) {
    $('#currency_switcher a').removeClass('active');
    $("#currency_switcher [data-locale='" + locale.toUpperCase() + "']").addClass('active');
  };

  return {
    init : init
  }
})();