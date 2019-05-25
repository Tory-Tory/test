$(document).on('click', 'button_test', function () {
    $.ajax({
        dataType: 'html',
        success: function (result) {
            $('#test').css({'display' : 'block'});
            $('#student').css({'display' : 'none'});
        }
    });
});