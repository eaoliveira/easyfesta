document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
});

// menu mobile

$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});

// chamar carousel


$(  document).ready(function () {
  $(window).scroll(function () {
    if($('.home').length > 0){
      if ($(window).scrollTop() > 300) {
        $('nav').removeClass('transparent');
        $('nav').addClass('red');
      } else {
        $('nav').addClass('transparent');
        $('nav').removeClass('red');
      }
    }
  });

});
// menu solido

//transicoes
jQuery(function ($) {

  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function () {

    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
      $animatables = $('.animatable');

    // Check all animatables and animate them if necessary
    $animatables.each(function (i) {
      var $animatable = $(this);

      // Items that are "above the fold"
      if (($animatable.offset().top + $animatable.height() + 50) < offset) {

        // Item previously wasn't marked as "above the fold": mark it now
        if (!$animatable.hasClass('animate-in')) {
          $animatable.removeClass('animate-out').css('top', $animatable.css('top')).addClass('animate-in');
        }

      }

      // Items that are "below the fold"
      else if (($animatable.offset().top + $animatable.height() + 50) > offset) {

        // Item previously wasn't marked as "below the fold": mark it now
        if ($animatable.hasClass('animate-in')) {
          $animatable.removeClass('animate-in').css('top', $animatable.css('top')).addClass('animate-out');
        }

      }

    });

  };

  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});

// microtransicoes

$(document).ready(function(){
  const calendario =document.querySelector('.datepicker');
M.Datepicker.init(calendario,{});
//   $('.datepicker').datepicker(init);
});
        

//calendário