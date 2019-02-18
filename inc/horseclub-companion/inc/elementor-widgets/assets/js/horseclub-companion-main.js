(function ($) {
    'use strict';

    //  Mailchimp ajax
    $('#mc_embed_signup').find('form').ajaxChimp();

    // Exibition widget owlCarousel
    var reviewCarusel = $('.active-review-carusel');
    
    if( reviewCarusel.length ) {
        reviewCarusel.owlCarousel({
            items:1,
            loop:true,
            margin:30,
            dots: true
        });
    }
    // Datepicker
    $( function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker2" ).datepicker();
     });

    //  Gallery
    var gallery = $('.active-gallery');
    
    if( gallery.length ) {
        gallery.owlCarousel({
            items:6,
            loop:true,
            dots: true,
            autoplay:true,    
                responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                900: {
                    items: 6,
                }

            }
        });
    }

    //  Counter Js 
    if( $('.facts-area').length ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }
    //
    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

})(jQuery);