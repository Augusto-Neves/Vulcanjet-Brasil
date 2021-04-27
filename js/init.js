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

$('.carousel.carousel-slider').carousel({
  duration: 300,
  padding: 0,
  indicators: true,
  fullWidth: true,
});

$('.carousel.partner').carousel({
  duration: 300,
  padding: 200,
  center: 1, 
  fullWidth: false, 
});

$('.carousel.two').carousel({
  duration: 300,
  padding: 200,
  padding: 0,
  center: 1,
  fullWidth: false,
})

// Carousel Loop

setInterval(function () {
  $('.carousel.carousel-slider').carousel('next');
}, 10000);

setInterval(function () {
  $('.carousel.partner').carousel('next');
},3000);

setInterval(function () {
  $('.carousel.two').carousel('next');
},3000);

//Character Counter Form
$(document).ready(function() {
  $('textarea#textarea1').characterCounter();
});