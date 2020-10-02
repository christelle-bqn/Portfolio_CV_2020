$(document).ready(function() {
    $('.portfolio__wrapper').magnificPopup({
        delegate: 'a', 
        type: 'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,6]
        },
        removalDelay: 300,
        mainClass: 'mfp-fade',
    });
});

