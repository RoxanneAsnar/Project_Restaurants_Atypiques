/*

switch()
    case 1 : $('#join-us-form').on('click', function());
    $('#join-us-form').show();
        break;

    case 2 : $('#joinus-button').on('click', function());
    $('#message-form).show();
        break;

*/


    $('#info-button').on('click', function(){
            $('#form1').show();
            $('#form2').hide();
    });

    $('#joinus-button').on('click', function(){
        $('#form2').show();
        $('#form1').hide();
    });

