    $('#info-button').on('click', function(){
            $('#form1').fadeIn();
            $('#form2').fadeOut();
    });

    $('#joinus-button').on('click', function(){
        $('#form2').fadeIn();
        $('#form1').fadeOut();
    });


    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 700) {
                $('.navbar-collapse .collapse').css("background-color", "rgba(51,51,51,0.7)");
            } else {
                $('.navbar-collapse .collapse').css("background-color", "transparent");
            }
        });
    });
