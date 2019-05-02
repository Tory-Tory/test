<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');

class Create
{
    function createTable()
    {
        $link = MySQL::connect();
        $query = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/mysql/test3.sql');
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            echo "Создание таблицы прошло успешно";
        }
    }
}

$create = new Create();
$test3 = $create->createTable();