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

          // Find Register in top nav and add target attribute
          $(document).ready(function(){
              $('#menu-primary-navigation li.menu-item-134 a').attr('target', '_blank').attr('title','Register for MarketplaceLIVE 2016! This link will open a new tab.');
          });

          // Nav icon animation
          $(document).ready(function(){
              $('#nav-icon').click(function(){
                  $(this).toggleClass('open');
              });
          });

          // Parallax effect at hover

          $(".parallax").mousemove(
              function(e){

                  var offset = $(this).offset();
                  var xPos = e.pageX - offset.left;
                  var yPos = e.pageY - offset.top;

                  var mouseXPercent = Math.round(xPos / $(this).width() * 100);
                  var mouseYPercent = Math.round(yPos / $(this).height() * 100);

                  $(this).children('img').each(
                      function(){
                          var diffX = $('.parallax').width() - $(this).width();
                          var diffY = $('.parallax').height() - $(this).height();

                          var myX = diffX * (mouseXPercent / 1500);

                          var myY = diffY * (mouseYPercent / 1080);


                          var cssObj = {
                              'left': myX + 'px',
                              'top': myY + 'px'
                          };

                          $(this).animate({left: myX, top: myY},{duration: 50, queue: false, easing: 'linear'});

                      }
                  );

              }
          );

          // back to top script
          // TODO: check if we still need this script

          $(document).ready(function () {
              // show or hide the sticky footer button
              $(window).scroll(function () {
                  if ($(this).scrollTop() > 200) {
                      $('.go-top').fadeIn(200);
                  } else {
                      $('.go-top').fadeOut(200);
                  }
              });

              // Animate to scroll to top
              $('.go-top').click(function (event) {
                  event.preventDefault();

                  $('html, body').animate({scrollTop: 0}, 300);
              });

          }); // go top


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
    },
      // Agenda page.
      'agenda': {
          init: function() {
              // JavaScript to be fired on the about us page

              // position modal
              $(document).ready(function(){
                  var mainHeight = $('#main').outerHeight();
                  var destination = $('#main').offset();
                  //$('.agenda-wrapper>.modal').css({ height: mainHeight+'px' });
                  //$('.agenda-wrapper>.modal').offset(destination);
              });

              // animate elements on load
              $(document).ready(function() {
                  $('.time').addClass('animated fadeInLeft');
                  $('.session').addClass('animated fadeInLeft');
              });


          } // closing function
      } // closing page
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
