/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        // Change the "name" and "id" attributes of Mailchimp's input field if
        // it is hidden (we duplicate the input field for responsive purposes)
        $('.mc-field-group input:hidden').attr("id", "mce-EMAIL-hidden");
        $('.mc-field-group input:visible').attr("id", "mce-EMAIL");
        $('.mc-field-group input:hidden').attr("name", "EMAIL-hidden");
        $('.mc-field-group input:visible').attr("name", "EMAIL");
        $(window).resize(function() {
          $('.mc-field-group input:hidden').attr("id", "mce-EMAIL-hidden");
          $('.mc-field-group input:visible').attr("id", "mce-EMAIL");
          $('.mc-field-group input:hidden').attr("name", "EMAIL-hidden");
          $('.mc-field-group input:visible').attr("name", "EMAIL");
        });

        function fixDiv() {
          var $div = $(".sticky-nav");
          var $offset = 0;

          if ($(window).width() < 1200) {
            $offset = 50;
          }
          else {
            $offset = 0;
          }

          if ($(window).scrollTop() > $div.data("top") - $offset) {
            $('.sticky-nav').addClass("getsticky");
          }
          else {
            $('.sticky-nav').removeClass("getsticky");
          }
        }

        if ($(".sticky-nav").length) {
          $(".sticky-nav").data("top", $(".sticky-nav").offset().top); // set original position on load
          $(window).scroll(fixDiv);
        }

        //jQuery for page scrolling feature - requires jQuery Easing plugin
        $(function() {
          $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
          });
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
