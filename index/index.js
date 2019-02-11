// Modal on load
$(window).on('load',function(){
  $('#newsletter').modal('show');
});

// Nav color change
$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

// Fade in jumbotron
$(document).ready(function() {
  $('.fade').animate({'opacity':'1'}, 500);
});

// Fade in all elements below jumbotron
$(document).ready(function() {
  // Every time the window is scrolled 
  $(window).scroll( function(){
  
      // Check the location of each desired element 
      $('.hideElement').each( function(i){
          
          var bottom_of_object = $(this).offset().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();
          
          // If the object is completely visible in the window, fade it it 
          if( bottom_of_window > bottom_of_object ){
              $(this).animate({'opacity':'1'},500);       
          }
      }); 
  });
});

// Fade in right contact section
$(document).ready(function() {
  $(window).scroll(function() {
    $('.fade-right').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();    

      /* If the object is completely visible in the window, fade it it */
      if( bottom_of_window > bottom_of_object ){
          $(this).animate({
            opacity: 1, 
            marginLeft: $(this).parent().width() / 2 - $(this).width() / 2
          },500);       
      }
    });
  });
});

// Changing 'active' states for tabs --> for navbar
$(".nav .nav-link").on("click", function(){
  $(".nav").find(".active").removeClass("active");
  $(this).addClass("active");
});