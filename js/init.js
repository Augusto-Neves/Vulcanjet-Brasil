//Nav Mobile Init

(function ($) {
  $(function () {

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// Side Nav Menu on left

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    edge: 'right'
  });
});

// Carousel Init

$('.carousel').carousel({
  duration: 300,
  padding: 0,  
});

$('.carousel.carousel-slider').carousel({
  duration: 300,
  padding: 0,
  indicators: true,
  fullWidth: true,
});

// Carousel Loop

setInterval(function () {
  $('.carousel.carousel-slider').carousel('next');
}, 10000);
