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

// Carousel
$(document).ready(function(){
  $('.carousel').carousel();
});
