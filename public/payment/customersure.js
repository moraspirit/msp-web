var CustomerSure = (function () {

  var init = function () {
    initAnalytics();
    // l10n(); Remove this until we get it working
    centerDropdowns();
    fixPlaceholders();
  };

  var initAnalytics = function () {
    $('body').on('click', 'a#login', function (e) {
      e.preventDefault();
      recordOutboundLink(this, 'Login clicks', 'https://login.customersure.com/');
    })
  };

  var l10n = function () {
    if ($.cookie('country') == 'GB') {
      $('.js_local_tel').text('0800 97 88 454');
      $('.js_international_tel').text('0800 97 88 454');
    }
    else {
      $('.js_local_tel').text('415 800 3497');
      $('.js_international_tel').text('+44 (0)191 226 7970');
      $('#tel_message').text('Call us for friendly help');
    }
  };

  var centerDropdowns = function () {
    $('.navbar .dropdown-menu').each(function (idx) {
      $this = $(this);
      var parentWidth = $this.parent().innerWidth();
      var menuWidth = $this.innerWidth();
      var margin = ((parentWidth / 2 ) - (menuWidth / 2)) + 'px';
      $this.css({
        left: 0,
        right: 'auto',
        "margin-left": margin
      })
    });
  };

  var fixPlaceholders = function () {
    if(typeof $.placeholder !== 'undefined') {
      $('input, textarea').placeholder();
    }
  };

  return {
    init : init
  }
})();