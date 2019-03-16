// Changing 'active' states for tabs --> for navbar
// Get the container element
var btnContainer = document.getElementById('activeNav');

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName('nav-link');

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click', function() {
    var current = document.getElementsByClassName('active');
    current[0].className = current[0].className.replace(' active', '');
    this.className += ' active';
  });
}

// Nav color change
$(function() {
  $(document).scroll(function() {
    var $nav = $('.fixed-top');
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

// Fade in jumbotron
$(document).ready(function() {
  $('.fade').animate({ opacity: '1' }, 500);
});

// Fade in all elements below jumbotron
$(document).ready(function() {
  // Every time the window is scrolled
  $(window).scroll(function() {
    // Check the location of each desired element
    $('.hideElement').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      // If the object is completely visible in the window, fade it it
      if (bottom_of_window > bottom_of_object) {
        $(this).animate({ opacity: '1' }, 500);
      }
    });
  });
});
