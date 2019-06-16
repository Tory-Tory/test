<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');
    $mysql = new MySQL();
    $connect = $mysql->connect();
    $fio = $_POST['FIO'];
    $res_t  = '';
    $res_d - '';
    $date = date('d-m-Y');
    $gruppa = $_POST['gruppa'];
    $t = 0;
    foreach ($_POST['t'] as $val){
        $t += $val;
    }
    $d = 0;
    foreach ($_POST['d'] as $val){
        $d += $val;
    }
    $mysql->add_test_2($connect, $fio, $gruppa, $date, $t, $d, $res_t, $res_d);
    header("Location: /test_2/");
?>