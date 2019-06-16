$(document).ready(function () {
    $('#button_st').click(function () {
        if (document.forms[0].FIO.value != '' && document.forms[0].gruppa.value != '') {
            $('#fio').addClass('disabled');
            $('#part_1').removeClass('disabled');
        } else {
            alert('Заполните обязательные поля!');
        }
        return false;
    });

    $('#button_st_3').click(function (e) {
        if (document.forms[0].FIO.value != '' && document.forms[0].gruppa.value != '') {
            $('#fio').addClass('disabled');
            $('#part_1').removeClass('disabled');
        } else {
            alert('Заполните обязательные поля!');
        }
        return false;
    });

    $('#button_next').click(function () {
        if ($('#FIO').val() != '' && $('#gruppa').val() != '') {
            window.location.href = '/test_3/form.php?' + $('#form_test').serialize();
        } else {
            alert('Заполните обязательные поля!');
        }
    });

    $("#form_test").on('submit', function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: $(this).serialize(),
            success: function () {
                var id = $('.mymagicoverbox').attr('data-part');
                var prev = Number.parseInt(id) - 1;
                var i = $('#part_' + prev + ' .question').attr('data-v');
                $('#part_' + prev + ' .required').each(function () {
                    if ($('input[name="v[' + i + ']"]:checked').length == 0) {
                        var q = $('#question_' + i + '').html();
                        if($('#question_' + i + '').find($('.error')).length == 0) {
                            q += '<div class="error" style="background: peachpuff;opacity: 0.7;width: 200px;color: red;text-align: center;">Заполните поле!</div>';
                        }
                        $('#question_' + i + '').html(q);
                    }else {
                        if($('#question_' + i + '').find($('.error')).length != 0){
                            $('.error').remove();
                        }
                    }
                    i++;
                });

                if($('#part_' + prev + '').find($('.error')).length == 0){
                    $('#myfond_gris').fadeIn(300);
                    var iddiv = $('.mymagicoverbox').attr("iddiv");
                    $('#' + iddiv).fadeIn(300);
                    $('#myfond_gris').attr('opendiv', iddiv);
                }else{
                    $('html, body').animate({scrollTop: 0},500);
                }

            }
        });
    });

    $('#myfond_gris, .mymagicoverbox_fermer').click(function () {
        var iddiv = $("#myfond_gris").attr('opendiv');
        $('#myfond_gris').fadeOut(300);
        $('#' + iddiv).fadeOut(300);
        window.location.href = '/';
    });

    $('#admin').submit(function (e) {
        e.preventDefault();
        $.ajax({
            data: $(this).serialize(),
            success: function () {
                window.location.href = '/user/result.php';
            }
        })
    });

    $('.button_part').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('data-part');
        var prev = Number.parseInt(id) - 1;
        var i = $('#part_' + prev + ' .question').attr('data-v');
        $('#part_' + prev + ' .required').each(function () {
            if ($('input[name="v[' + i + ']"]:checked').length == 0) {
                var q = $('#question_' + i + '').html();
                if($('#question_' + i + '').find($('.error')).length == 0) {
                    q += '<div class="error" style="background: peachpuff;opacity: 0.7;width: 200px;color: red;text-align: center;">Заполните поле!</div>';
                }
                $('#question_' + i + '').html(q);
            }else {
                if($('#question_' + i + '').find($('.error')).length != 0){
                    $('.error').remove();
                }
            }
            i++;
        });

       if($('#part_' + prev + '').find($('.error')).length == 0){
           $('#part_' + prev + '').addClass('disabled');
           $('#part_' + id + '').removeClass('disabled');
           $('html, body').animate({scrollTop: 0},500);
       }else{
           $('html, body').animate({scrollTop: 0},500);
       }

    });

    $('.button_part_1').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('data-part');
        var i = $('#part_' + id + ' .question').attr('data-v');
        $('#part_' + id + ' .required').each(function () {
            var t = $('#question_' + i + '').attr('data-t');
            var d = $('#question_' + i + '').attr('data-d');
            var data_this = $('#question_' + i + '').attr('data-this');
            if(data_this == 't'){
                if ($('input[name="t[' + t + ']"]:checked').length == 0) {
                    var q = $('#question_' + i + '').html();
                    if($('#question_' + i + '').find($('.error')).length == 0) {
                        q += '<div class="error" style="background: peachpuff;opacity: 0.7;width: 200px;color: red;text-align: center;">Заполните поле!</div>';
                    }
                    $('#question_' + i + '').html(q);
                }else {
                    if($('#question_' + i + '').find($('.error')).length != 0){
                        $('.error').remove();
                    }
                }
            }

            if(data_this == 'd'){
                if($('input[name="d[' + d + ']"]:checked').length == 0){
                    var q = $('#question_' + i + '').html();
                    if($('#question_' + i + '').find($('.error')).length == 0) {
                        q += '<div class="error" style="background: peachpuff;opacity: 0.7;width: 200px;color: red;text-align: center;">Заполните поле!</div>';
                    }
                    $('#question_' + i + '').html(q);
                }else {
                    if($('#question_' + i + '').find($('.error')).length != 0){
                        $('.error').remove();
                    }
                }
            }
            i++;

        });

        if($('#part_' + id + '').find($('.error')).length == 0){
            var next = Number.parseInt(id) + 1;
            $('#part_' + id + '').addClass('disabled');
            $('#part_' + next + '').removeClass('disabled');
            $('html, body').animate({scrollTop: 0},500);
        }else{
            $('html, body').animate({scrollTop: 0},500);
        }
    });

    $("#form_test_td").on('submit', function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: $(this).serialize(),
            success: function () {
                var id = $('.mymagicoverbox').attr('data-part');
                var i = $('#part_' + id + ' .question').attr('data-v');
                $('#part_' + id + ' .required').each(function () {
                    var t = $('#question_' + i + '').attr('data-t');
                    var d = $('#question_' + i + '').attr('data-d');
                    var data_this = $('#question_' + i + '').attr('data-this');
                    if (data_this == 't') {
                        if ($('input[name="t[' + t + ']"]:checked').length == 0) {
                            var q = $('#question_' + i + '').html();
                            if ($('#question_' + i + '').find($('.error')).length == 0) {
                                q += '<div class="error" style="background: peachpuff;opacity: 0.7;width: 200px;color: red;text-align: center;">Заполните поле!</div>';
                            }
                            $('#question_' + i + '').html(q);
                        } else {
                            if ($('#question_' + i + '').find($('.error')).length != 0) {
                                $('.error').remove();
                            }
                        }
                    }

                    if (data_this == 'd') {
                        if ($('input[name="d[' + d + ']"]:checked').length == 0) {
                            var q = $('#question_' + i + '').html();
                            if ($('#question_' + i + '').find($('.error')).length == 0) {
                                q += '<div class="error" style="background: peachpuff;opacity: 0.7;width: 200px;color: red;text-align: center;">Заполните поле!</div>';
                            }
                            $('#question_' + i + '').html(q);
                        } else {
                            if ($('#question_' + i + '').find($('.error')).length != 0) {
                                $('.error').remove();
                            }
                        }
                    }
                    i++;
                });

                    if($('#part_' + id + '').find($('.error')).length == 0){
                        $('#myfond_gris').fadeIn(300);
                        var iddiv = $('.mymagicoverbox').attr("iddiv");
                        $('#' + iddiv).fadeIn(300);
                        $('#myfond_gris').attr('opendiv', iddiv);
                    }else{
                        $('html, body').animate({scrollTop: 0},500);
                    }

                }
        });
    });

    $('.required').click(function () {
        $(this).prop('checked');
    });

    $('input[name="gruppa"]').mask('999 яяя');
});