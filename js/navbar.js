window.onscroll = function() {myFunction()};

var sticky = $(window).height() - "62";

function myFunction() {
  if (window.pageYOffset  >= sticky) {
    $( ".navbar" ).addClass("sticky")
  } else {
    $( ".navbar" ).removeClass("sticky");
  }
}

$('.goSmoothly').on('click', function(e) {
  e.preventDefault();
  var target = $(this.hash);
    if (target.length) {
      if ($('.navbar').hasClass("sticky")) {
        $('html, body').animate({
          scrollTop: target.offset().top - 62
        }, 1500, 'easeInOutExpo');
      } else {
        $('html, body').animate({
          scrollTop: target.offset().top - 124
        }, 1500, 'easeInOutExpo');
      }
    }
});

$( '.navbar-nav a' ).on('click', function () { 
    $( '.navbar-nav' ).find( 'a.active' ).removeClass( 'active' ); 
    $( this ).addClass( 'active' ); 
}); 

$( '.navbar-nav a' ).on('click', function () { 
  $( '.navbar-collapse' ).removeClass("show");
}); 
