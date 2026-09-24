/**
 * Horseclub Elementor widgets, front end: the Mailchimp signup form, the
 * review and gallery carousels, the booking form's date fields, the counters
 * and the video popup. No jQuery.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  //  Mailchimp ajax
  UI.ajaxChimp('#mc_embed_signup form');

  // Exibition widget owlCarousel
  UI.owl('.active-review-carusel', {
    items: 1,
    loop: true,
    margin: 30,
    dots: true
  });

  // Datepicker
  UI.datepicker('#datepicker', { wrap: false });
  UI.datepicker('#datepicker2', { wrap: false });

  //  Gallery
  UI.owl('.active-gallery', {
    items: 6,
    loop: true,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 6
      }
    }
  });

  //  Counter Js
  if (document.querySelector('.facts-area')) {
    UI.counter('.counter', { time: 1000 });
  }

  UI.magnific('.play-btn', {
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
}());
