// Initialize popover
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

// Left quantity box
$(document).ready(function(){
       $('.quantity-right-plus').click(function(e){        
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined & Increment
                $('#quantity').val(quantity + 1);
        });
    
         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined & Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });
        
    });

// Right quantity box
$(document).ready(function(){
    $('.quantity-right-plus1').click(function(e){  
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity1 = parseInt($('#quantity1').val());
        
        // If is not undefined & Increment
        $('#quantity1').val(quantity1 + 1);
    });

    $('.quantity-left-minus1').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity1 = parseInt($('#quantity1').val());
        
        // If is not undefined & Increment
        if(quantity1>0){
            $('#quantity1').val(quantity1 - 1);
        }
    });
});

// addToCart for iPhone 7
// Hide checkout message on load
var bool_isHidden = false;
$('.hide').hide();

// Get input from quantity box field
$('#iphone7').click(function(e) {
    // Prevent following action of button
    e.preventDefault();

    // Making checkout div appear
    if (bool_isHidden == false) {
        // Transition to fade in element
        $('.hide').hide(50);
        $('.hide').show(100);

        // Change boolean to prevent animation spam
        bool_isHidden = true;
    }
});
