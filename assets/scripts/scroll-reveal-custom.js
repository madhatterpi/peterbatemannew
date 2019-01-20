// Scroll Reveal
jQuery(function($) {
  window.sr = ScrollReveal();

});

jQuery(function($) {

  // if ( ($(window).width() > 768) && (!$('body').hasClass('blog')) ) {
  //   sr.reveal('.blog-section__article', {
  //     duration: 800,
  //     scale: 0.7,
  //     distance: '0'
  //   }, 200);
  // }
});

jQuery(function($) { 

  if ( ($(window).width() > 768) && ( $ ('body').hasClass('home') ) ) {

    sr.reveal('.skills__icon', {
      duration: 800,
      scale: 0.7,
      distance: '0'
    }, 300);

  } 

});

jQuery(function($) { 


    sr.reveal('.project', {
      duration: 800,
      scale: 0.7,
      distance: '0'
    }, 300);


});

jQuery(function($) { 

  if ( $('body').hasClass('single-portfolio') ) {

    sr.reveal('.portfolio-reveal', {
      duration: 800,
      distance: '0',
      scale: 1,
    });

  }
});
