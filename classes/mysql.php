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

    function add_test_1($connect, $fio, $gruppa, $text, $date, $sum)
    {
        mysqli_query($connect, "INSERT INTO `test1`(`ID`, `FIO`, `gruppa`, `sum`, `res`, `date`) VALUES (NULL, '".$fio."', '".$gruppa."', '".$sum."', '".$text."', '".$date."');");
    }
    function add_test_2($connect, $fio, $gruppa, $date, $t, $d)
    {
        mysqli_query($connect, "INSERT INTO `test2`(`ID`, `FIO`, `gruppa`, `date`, `t`, `d`) VALUES (NULL, '".$fio."', '".$gruppa."', '".$date."', '".$t."', '".$d."');");
        echo mysqli_error($connect);
    }

    function GetList($tableName, $filter)
    {
        $arResult = [];
        $result = [];
        $connect = MySQL::connect();
        if(!empty($filter)){
            echo "string";
            $select_query = 'SELECT * FROM '.$tableName.' WHERE gruppa = "'.$filter['GRUPPA'].'"';
        }else{
            $select_query = 'SELECT * FROM '.$tableName.'';
        }
        $res = mysqli_query($connect, $select_query);
        if(!$res){
            echo 'Ошибка: '.mysqli_error();
        }else{
            while ($row = mysqli_fetch_assoc($res)) {
                $result[] = $row;
            }
            foreach ($result as $item) {
                switch ($tableName) {
                    case 'test1':
                        $arResult['GRUPPA'][$item['gruppa']][] = [
                            'GRUPPA' => $item['GRUPPA'],
                            'FIO' => $item['FIO'],
                            'SUMMA' => $item['sum'],
                            'RESULT' => $item['res'],];
                        break;
                    case 'test2':
                        $arResult['GRUPPA'][$item['gruppa']][] = [
                            'GRUPPA' => $item['GRUPPA'],
                            'FIO' => $item['FIO'],
                            'T' => $item['t'],
                            'D' => $item['d'],];
                        break;
                }
            }
        }
        return $arResult;
    }
}