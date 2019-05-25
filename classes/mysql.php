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

    function isAdmin($filter){
        if($this->registeredUser($filter)) {
            $connect = MySQL::connect();
            $admin = 'SELECT `admin` FROM `user` WHERE login = "' . $filter['LOGIN'] . '" AND password = "' . $filter['PASS'] . '"';
            $res = mysqli_query($connect, $admin);
            $row = mysqli_fetch_assoc($res);
            return $row['admin'];
        } else {
            return false;
        }
    }

    function registeredUser($filter){
        $connect = MySQL::connect();
        $user = 'SELECT * FROM `user` WHERE login = "'.$filter['LOGIN'].'" AND password = "'.$filter['PASS'].'"';
        $user = mysqli_query($connect, $user);
        if(!empty($user)){
            return true;
        }else{
            return false;
        }
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
                    case 'test3':
                        $arResult['GRUPPA'][$item['gruppa']][] = [
                            'GRUPPA' => $item['GRUPPA'],
                            'FIO' => $item['FIO'],
                            'RESULT_SHKALA_1' => $item['res_1'],
                            'TEXT_SHKALA_1' => $item['shkala_1'],
                            'RESULT_SHKALA_2' => $item['res_2'],
                            'TEXT_SHKALA_2' => $item['shkala_2'],
                            'RESULT_SHKALA_3' => $item['res_3'],
                            'TEXT_SHKALA_3' => $item['shkala_3'],
                            'RESULT_SHKALA_4' => $item['res_4'],
                            'TEXT_SHKALA_4' => $item['shkala_4'],
                            'RESULT_SHKALA_5' => $item['res_5'],
                            'TEXT_SHKALA_5' => $item['shkala_5'],
                            'RESULT_SHKALA_6' => $item['res_6'],
                            'TEXT_SHKALA_6' => $item['shkala_6'],
                            'RESULT_SHKALA_7' => $item['res_7'],
                            'TEXT_SHKALA_7' => $item['shkala_7'],
                            ];
                        break;
                }
            }
        }
        return $arResult;
    }
}

