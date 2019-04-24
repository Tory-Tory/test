<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');

    $mysql = new MySQL();
    $connect = $mysql->connect();
    $fio = $_POST['FIO'];
    $date = date('d-m-Y');
    $gruppa = $_POST['gruppa'];
    $sum = 0;
    foreach ($_POST['v'] as $val){
        $sum += $val;
    }
    if($sum >=20 && $sum <=49){
       $text = 'Вы обычный интернет-пользователь. Можете путешествовать по сети сколько угодно долго, т.к. умеете контролировать себя.';
    }elseif($sum >=50 && $sum <= 79){
        $text = 'У вас некоторые проблемы, связанные с чрезмерным увлечением интернетом. Если вы не обратите на них внимание сейчас,  в дальнейшем они могут заполнить всю вашу жизнь.  ';
    }else{
        $text = 'Использование интернета вызывает значительные проблемы в вашей жизни. Требуется помощь специалиста-психотерапевта.';
    }
    $mysql->add_test_1($connect, $fio, $gruppa, $text, $date, $sum);
    header("Location: /test_1/");
?>