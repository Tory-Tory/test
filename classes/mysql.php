<?php

class MySQL
{
    function connect()
    {
        $connect = mysqli_connect($_SERVER['HTTP_HOST'], 'root', '', 'test');
        if (!$connect) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        return $connect;
    }

    function add($connect, $fio, $gruppa, $text, $date, $sum)
    {
        mysqli_query($connect, "INSERT INTO `test1`(`ID`, `FIO`, `gruppa`, `sum`, `res`, `date`) VALUES (NULL, '".$fio."', '".$gruppa."', '".$sum."', '".$text."', '".$date."');");
    }

    function GetList()
    {
        $connect = MySQL::connect();
        $select_query = 'SELECT * FROM test1';
        $res = mysqli_query($connect, $select_query);
        if(!$res){
            echo 'Ошибка: '.mysqli_error();
        }else{
            $arResult = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $arResult[] = $row;
            }
        }
        return $arResult;
    }
}