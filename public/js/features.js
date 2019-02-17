/*
$(document).ready(function() {
    var width = $(this).outerWidth();
    var leftNum = width / 2 - 1200;
    var rightNum = width / 2 - 1000;

    $(".fade-right").animate({
        left: leftNum,
        opacity: "show",
    }, 1000); 
});
*/

// Fade in right buy now section
$(document).ready(function() {
    $(window).scroll(function() {
      $('.fade-right').each(function(i) {
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();    
        var fadeRight = $(this).parent().width() / 2 - $(this).width() / 2 + 100;
  
        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){
            $(this).animate({
              opacity: 1, 
              marginLeft: fadeRight
            },500);       
        }
      });
    });
  });