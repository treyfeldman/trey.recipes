jQuery(function($) {



    $(window).scroll(function(e) {

    });

    $('.food-button').click(function(e) {
        if($('.bg-container').css('left') == '300px') {
            $('.food-nav').animate({left: '-300px'}, 500);
            $('.bg-container').animate({left: '0px'}, 500, function () {
                $('.bg-container').css('left', '');
            });
        }
        else {
            $('.food-nav').animate({left: '0px'}, 500);
            $('.bg-container').animate({left: '300px'}, 500);
        }
    });

    $('.food-nav').click(function(e) {
        if($('.bg-container').css('left') == '300px') {
            $('.food-nav').animate({left: '-300px'}, 500);
            $('.bg-container').animate({left: '0px'}, 500, function () {
                $('.bg-container').css('left', '');
            });
        }
    });

    $('.drinks-button').click(function(e) {
        if($('.bg-container').css('right') == '300px') {
            $('.drinks-nav').animate({right: '-300px'}, 500);
            $('.bg-container').animate({right: '0px'}, 500);
        }
        else {
            $('.drinks-nav').animate({right: '0px'}, 500);
            $('.bg-container').animate({right: '300px'}, 500);
        }


    });

    $('.drinks-nav').click(function(e) {
        $('.drinks-nav').animate({right: '-300px'}, 500);
        $('.bg-container').animate({right: '0px'}, 500);
    });


});