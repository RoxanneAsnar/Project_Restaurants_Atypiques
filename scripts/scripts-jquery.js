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

    /*$object.onmousedown = function($clickDown){
        $('.btn-primary').css('background-color:#8E9B00;');
    };
$clickDown('.btn-primary').on('click', function(){
        $('.btn-primary').css('background-color:#8E9B00;');
    });
*/
