(function () {
    /*
      Don't serve IE6 a broken experience. Serve it bread and water.
      Not testing for every browser under the sun here - if someone's still
      using NN4, they will get breakage, but we're weighing up the likelihood
      of that against having loads of convoluted browser detects here.

      Don't serve the tab to the major mobile devices. I'm not convinced user agent
      detection is the way forwards, but this is a temp. change until we decide
      how to optimize the tab for mobiles. If this sticks we could be more thorough with
      the convoluted browser detects mentioned above, something like the Js fn here:
      http://detectmobilebrowsers.com/
    */
    if(navigator.userAgent.match(/(MSIE 6|iPhone|iPod|android.+mobile|BlackBerry|Windows Phone)/i)) {
      return false;
    }

  /* ======================= INITIALISE jQUERY ============================
     Lots of prior art here:
     http://alexmarandon.com/articles/web_widget_jquery/

     Basically, check if jQ is defined, if not, load it via a script tag.
     When that tag downloads the jQ source, it runs scriptLoadHandler() to
     sort out conflicts with the site's own jQ/other libs which utilise $.
     =======================                   ============================*/
  var jQuery;

  if(window.jQuery === undefined || invalidJqueryVersion(window.jQuery.fn.jquery)) {

    var script_tag = document.createElement('script');
    script_tag.setAttribute('type', 'text/javascript');
    script_tag.setAttribute('src', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    if (script_tag.readyState) { // for IE
      script_tag.onreadystatechange = function () {
        if (this.readyState == 'complete' || this.readyState == 'loaded') {
          scriptLoadHandler();
        }
      };
    } else {
      script_tag.onload = scriptLoadHandler;
    }
    (document.getElementsByTagName('head')[0] || document.documentElement).appendChild(script_tag);
  } else {

    jQuery = window.jQuery;
    main();
  }

  // Better JQ version checking
  function invalidJqueryVersion (vstring) {
    if (vstring === '1.8.3' || vstring === '1.8.2' ||
        vstring === '1.8.1' || vstring === '1.8.0' || vstring === '1.7.2' || vstring === '1.7.1' || vstring === '1.7.0') {
      return false;
    } else {
      return true;
    }
  };

  //runs when external jQuery get loaded
  function scriptLoadHandler () {
    jQuery = window.jQuery.noConflict(true);
    main();
  }

  // ============== DONE INITIALISING jQUERY ====

  function main () {
    jQuery(document).ready(function($) {
      /*
       * jQuery postMessage - v0.5 - 9/11/2009
       * http://benalman.com/projects/jquery-postmessage-plugin/
       *
       * Copyright (c) 2009 "Cowboy" Ben Alman
       * Dual licensed under the MIT and GPL licenses.
       * http://benalman.com/about/license/
       */

      (function($){var g,d,j=1,a,b=this,f=!1,h="postMessage",e="addEventListener",c,i=b[h]&&!$.browser.opera;$[h]=function(k,l,m){if(!l){return}k=typeof k==="string"?k:$.param(k);m=m||parent;if(i){m[h](k,l.replace(/([^:]+:\/\/[^\/]+).*/,"$1"))}else{if(l){m.location=l.replace(/#.*$/,"")+"#"+(+new Date)+(j++)+"&"+k}}};$.receiveMessage=c=function(l,m,k){if(i){if(l){a&&c();a=function(n){if((typeof m==="string"&&n.origin!==m)||($.isFunction(m)&&m(n.origin)===f)){return f}l(n)}}if(b[e]){b[l?e:"removeEventListener"]("message",a,f)}else{b[l?"attachEvent":"detachEvent"]("onmessage",a)}}else{g&&clearInterval(g);g=null;if(l){k=typeof m==="number"?m:typeof k==="number"?k:100;g=setInterval(function(){var o=document.location.hash,n=/^#?\d+&/;if(o!==d&&n.test(o)){d=o;l({data:o.replace(n,"")})}},k)}}}})(jQuery);

      var our_script_tag = $('script#customersure_tab_script');
      if(our_script_tag.length === 0) {
        our_script_tag = $('script[src*=customersure_tab]'); // slower
        if(our_script_tag.length === 0) {
          throw "Could not locate the CustomerSure script tag on the host page";
        }
      }

      //parse params passed via the query string of the script tag
      var params = our_script_tag.attr('src').split('?')[1].split('&');
      var org_identifier = undefined, remote_domain = undefined;

      for(var i = 0; i < params.length; i++) {

        var key_val = params[i].split('=');
        var key = key_val[0];
        var val = key_val[1];

        switch(key) {
          case 'organisation':
            org_identifier = val;
          break;
          case 'remote_domain':
            remote_domain = 'http://' + val;
          break;
        }
      }

      // Bail if we don't have an organisation
      if(!org_identifier) {
        throw "The organisation identifier on the host page was invalid";
      }

      // Default if we don't get a resource host passed.
      if(!remote_domain) {
        remote_domain = 'https://'+org_identifier+'.customersure.com';
      }

      // If the parent doc is running in quirks mode we need to do some things a little differently.
      // We only do this for IE, because strangely 'quirks mode' in all other browsers is better behaved
      // than IE's quirks mode.
      var ie_quirks_mode = (document.compatMode == "BackCompat" && (/MSIE/i.test(navigator.userAgent))) ? "&quirks_mode=true" : '';

      // Template for different types of tab (left, right, bottom...)
      var TabType = function(opts) {
        for(var attr in opts) {
           if(opts.hasOwnProperty(attr)) {
             this[attr] = opts[attr];
          }
        }
      };
      TabType.prototype = {
          out_posn       : '0'
        , in_posn        : '0'
        , anim_direction : 'left'
        , in_opacity     : '.7'
      };


      // Wrapper function/'class' for CustomerSure Tab functionality.
      var Tabs = function () {

        var CUSTOMERSURE_TAB_HOTSPOT = {
            open_height   : '170px'
          , closed_height : '155px'
          , selector      : '#customersure_tab_hotspot'
        };

        // Dictionary of different 'types' of tab.
        var tab_types = {
            customersure_tab_display_left : new TabType({
              out_posn       : '0'
            , in_posn        : '-398px'
            , anim_direction : 'left'
          })
          , customersure_tab_display_right : new TabType({
              out_posn         : '0'
            , in_posn          : '-398px'
            , anim_direction   : 'right'
          })
        };

        /* Move a tab in or out. You are very unlikely to want this as an
         * event handler. You probably want an event handler (like
         * maybe_move_tab) to work out 'direction', then call this.
         *
         * @param   the_tab     jQuery object representing #customersure_tab
         * @param   direction   String - either 'in' or 'out'.
         *                      Any other value has the effect of 'in'
         */
        var move_tab = function(the_tab, direction) {
          var the_hotspot = $(CUSTOMERSURE_TAB_HOTSPOT.selector);

          var tab_type = tab_types[$('#customersure_tab_inner').attr('data-orientation')];
          if(typeof tab_type === 'undefined') {
            throw "Tab type not set";
          }

          // Set up the jQuery animation params.
          var posn = undefined;
          var anim_opts = { speed: 'medium' }

          // Finish configuring the animation params.
          // We add/remove classes BEFORE animation to stop the box-shadow
          // 'popping in' after animation (there's no sane way YET for us to
          // animate box-shadow nicely).
          if('out' == direction) {
            the_tab.removeClass('customersure_tab_closed');
            the_tab.addClass('customersure_tab_open');
            posn = tab_type['out_posn'];
          } else {
            the_tab.removeClass('customersure_tab_open');
            the_tab.addClass('customersure_tab_closed');
            posn = tab_type['in_posn'];
          }

          anim_opts[tab_type['anim_direction']] = posn;
          //Perform animation
          the_tab.animate(anim_opts, function () {
            if('out' == direction) {
              the_hotspot.animate({height : CUSTOMERSURE_TAB_HOTSPOT.open_height}, function () {
                $('#customersure_tab_close').show();
              });
            } else {
              $('#customersure_tab_close').hide();
              the_hotspot.animate({height : CUSTOMERSURE_TAB_HOTSPOT.closed_height }, function () {    });
            }
          });
        };

        /* Event handler for picking up events which could possibly result in
         * a tab move.
         * For example, if tab is open, a click on any dom elem outside the
         * tab should close it, but if tab is closed, these clicks should be
         * ignored.
         * This sorts all that out, and calls move_tab with the correct
         * direction, if it should indeed move at all.
         *
         * @param   the_tab     jQuery object representing #customersure_tab
         * @param   direction   String - either 'in' or 'out'.
         *                      Any other value has the effect of 'in'
         */
        var maybe_move_tab  = function (e, direction) {

          var dom_elem_clicked = $(e.target);
          var tab_itself = $('#customersure_tab');

          // Close button clicked? Better close, then.
          if (dom_elem_clicked.hasClass('customersure_close_tab')) {
            move_tab(tab_itself, 'in');
          // Clicked on the hotspot? Use the supplied direction.
          } else if(dom_elem_clicked.attr('id') === 'customersure_tab_hotspot') {
            if(dom_elem_clicked.is(':animated')) { return false; }
            move_tab(tab_itself, direction);
          // Clicked on anything else? If it was inside the tab, don't move.
          // If it was elsewhere, close.
          } else {
            if(dom_elem_clicked.parents('#customersure_tab').length > 0) { return false; }
            move_tab($('#customersure_tab'), 'in');
          }

        };

        /* Work out if a click should trigger a tab move 'out' or 'in'. Used
         * by a closure in init_tab to work out where the tab's currently at.
         */
        var in_or_out = function () {
          if($('#customersure_tab').hasClass('customersure_tab_display_left')) {
            return ($('#customersure_tab_inner').offset().left < 0) ? 'out' : 'in';
          } else {
            var right_pos = $('#customersure_tab_inner').offset().left + $('#customersure_tab_inner').width();
            return (right_pos > $(document).width()) ? 'out' : 'in';
          }
        };

        /* Process messages received via the HTML5 postMessage API.
         * The event handler $.receiveMessage which abstrats away hashchange
         * hacks used for older browsers hands off the received message to
         * this function for processing
         *
         * @param   msg   The message received.
         **/
        var process_incoming_message = function (msg) {
          var msg_components = msg.data.split('=');
          if(msg_components[0] == 'height') {
            $('body').trigger('formResizeRequired', msg_components);
          } else if (msg_components[0] == 'close') {
            move_tab($('#customersure_tab'), 'in');
          } else {
            return false;
          }
        };

        /* Resize the iframe which holds the form.
         *
         * @param   dimension   String  Which dimension to resize.
         * @param   value       String  What quanitity to resize by.
         *                      Don't supply units, we're using px and you're
                                going to like it
         **/
        var resize_form = function (dimension, value) {
          var anim_params = {};
          anim_params[dimension] = value + 'px';
          $('#customersure_tab iframe').animate(anim_params);
        };


        /* Initialise all the behaviours of a CustomerSure Tab. This is the
         * only public API to the tab.
         *
         * @param   id        String ID selector for the tab in question
         */
        var init_tab = function(id) {

          var tab     = $(id);

          // Old editions of the tab specified behaviour by setting classes on the tab.
          // This was a silly idea, so this line prevents old tabs 'in the wild' from messing
          // up against new code.
          tab.removeClass();

          //Setup message handler for messages coming up from the iframe
          $.receiveMessage(function (msg) { process_incoming_message(msg);}
                          , remote_domain);

          //Establish comms with the iframe by telling it the URL of its parent document.
          var tab_iframe = $('iframe', tab);
          // tab_iframe[0].contentWindow.location = tab_iframe[0].src +'#' + location.href;

          // Listen for any events which may cause the iframe to need resizing
          $('body').bind('formResizeRequired', function (e,dimension,value) { resize_form(dimension, value); });

          //Set up the tab trigger
          $('body').live('click', function (e) { maybe_move_tab(e, in_or_out())});

          //Allow 'esc' to close the tab.
          $('body').live('keydown', function (e) {
            if(e.keyCode === 27) {
              move_tab(tab,'in');
            }
          });

          tab.addClass('customersure_tab_closed');
          tab.addClass($('#customersure_tab_inner').attr('data-orientation'));
        };

        var fix_container_dom_position = function() {
          var $tab = $('#customersure_tab');
          if($tab.length === 0) {
            $tab = $('<div />', { id : 'customersure_tab' });
          }
          $tab.remove().appendTo('body');
        };

        // export the init_tab method to the outside world!
        return {
            init_tab : init_tab
          , fix_container_dom_position : fix_container_dom_position
        };
      }();

      /* Async load the skeleton of the tab. If we get it, run init_tab on it to
         sort its behaviours. We silently ignore errors for now. */
      $.ajax({
          url         : remote_domain + '/widgets/tab?organisation=' + org_identifier + ie_quirks_mode
        , dataType    : 'jsonp'
        , beforeSend  : function () { Tabs.fix_container_dom_position(); }
        , success     : function(data) {
          $('#customersure_tab').html(data.html).show();
          Tabs.init_tab('#customersure_tab');
        }
        , error : function (jqXHR, textStatus, errorThrown) {
        }
      });
    });
  }

})();
