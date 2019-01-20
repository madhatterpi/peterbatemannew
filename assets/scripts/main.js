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


// Mobile Menu
jQuery(function($) {
  $('.hamburger').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('is-active');
    $('body').toggleClass("fixed-position");
    $('.main-menu').toggleClass('mobile-menu-overlay');
    $('.menu-primary-nav-container').toggleClass('mobile-menu-visible');
  });

  // $('.menu-icon').click(function() {
  //   $(this).toggleClass('menu-content--is-visible menu-icon--close-x');
  //   $('body').toggleClass("fixed-position");
  //   $('.main-menu').toggleClass('mobile-menu-overlay');
  //   $('.menu-primary-nav-container').toggleClass('mobile-menu-visible');
  // });
});

jQuery(function($) {
  $('.project').on('hover', function() {
    $('.project-overlay').css('opacity', '1');
  });
});

jQuery(function($) {
  $('.menu-item').on('hover', function() {
    $(this).find('a').toggleClass('sayhi');
  });
});



//Portfolio
// jQuery(function($) {
//   $('.project__overlay').on('hover', function() {
//     $(this).children().find('h2').toggleClass('project__top');
//     $(this).children().find('.button__projects').toggleClass('project__bottom');
//     $(this).children().find('.project__meta').toggleClass('project__hi');
//   });
// });
//
jQuery(function($) {
  $('.project').on('hover', function() {
    $(this).children().find('.project__text').toggleClass('project__hi');
  });
});

//Scroll down project__buttons
jQuery(function($) {
  $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 700, 'linear');
  });
});
});

// fade in links
jQuery(function($) { // document ready

  $("div.hamburger").click(function() {
    if ( $(this).hasClass("is-active") ) {

      console.log("hi")

      $(".menu-item").each(function(i) {
        $(this).delay(125 * i).queue(function(nxt) {
          $(this).css('visibility','visible').hide().fadeIn();
        nxt();
        });
      });

    } else {

      $(".menu-item").css('visibility','hidden');

    }

  });

  $('.arrow-up').click(function() {
    $('html, body').animate({scrollTop:0}, '600');
  });



}); // document ready
