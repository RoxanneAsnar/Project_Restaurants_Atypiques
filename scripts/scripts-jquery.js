    $('#info-button').on('click', function(){
            $('#form1').fadeIn();
            $('#form2').fadeOut();
    });

    $('#joinus-button').on('click', function(){
        $('#form2').fadeIn();
        $('#form1').fadeOut();
    });

    /*$object.onmousedown = function($clickDown){
        $('.btn-primary').css('background-color:#8E9B00;');
    };
$clickDown('.btn-primary').on('click', function(){
        $('.btn-primary').css('background-color:#8E9B00;');
    });

    /* The nav background-color appears when you scroll until the next part */

    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 700) {
                $('.navbar-collapse .collapse').css("background-color", "rgba(51,51,51,0.7)");
            } else {
                $('.navbar-collapse .collapse').css("background-color", "transparent");
            }
        });
    });
