(function($) { 

// banner height
var windowWidth = $(window).width();
    windowHeight = $(window).height();

$('.banner').css({'width': windowWidth ,'height': windowHeight - "62" });

}(jQuery));

window.onload = function() {
    Particles.init({
        selector: '.banner__background',
        color: ['#38C4FD', '#404B69', '#BDCBCF'],
        connectParticles: true,
        maxParticles: 200,
        speed: 0.3,
    });
};