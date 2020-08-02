$(document).ready(function(){
  $('.firstslider').slick({
      dots: false,
      infinite: true,
      speed: 1000,
      fade: true,
      arrows: true
  });
});

$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $("#Home").height();
        ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
    });
});

function myFunction(x) {
  x.classList.toggle("change");
}
