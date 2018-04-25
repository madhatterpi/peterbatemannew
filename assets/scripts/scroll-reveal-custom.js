// Scroll Reveal
jQuery(function($) {
  window.sr = ScrollReveal();

sr.reveal('.sr-icon', {
  duration: 600
});
 sr.reveal('.my-process__section', {
   duration: 800,
   viewFactor: 0.7,
 });
 sr.reveal('.portfolio-reveal', {
   duration: 800,
   distance: '0',
   scale: 1,
 });
 sr.reveal('.project', {
   duration: 600,
   scale:1,
 });
});

jQuery(function($) {

  if ( ($(window).width() > 768) && (window.location.href !== 'http://localhost:3000/peterbateman/blog/') ) {
    sr.reveal('.blog-section__article', {
      duration: 800,
      scale: 0.7,
      distance: '0'
    }, 200);
  }
});

jQuery(function($) {

  if (window.location.href !== 'http://localhost:3000/peterbateman/services/') {
    sr.reveal('.skills__icon', {
      duration: 600
    });



  }
});

jQuery(function($) {

  if ( ($(window).width() > 768) && (window.location.href !== 'http://localhost:3000/peterbateman/services/') ) {

    sr.reveal('.show', {
      duration: 800,
      scale: 0.7,
      distance: '0'
    }, 200);

    sr.reveal('.show-b', {
      duration: 800,
      scale: 0.7,
      distance: '0'
    }, 200);

  } else {

  }
});
