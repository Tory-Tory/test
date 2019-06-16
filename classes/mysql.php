<?php

class MySQL
{
    function connect()
    {
        $connect = mysqli_connect('localhost', 'root', 'nxQVh5derATdMi4', 'test');
        $connect->set_charset('utf8');
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
    function add_test_2($connect, $fio, $gruppa, $date, $t, $d, $res_t, $res_d)
    {
        mysqli_query($connect, "INSERT INTO `test2`(`ID`, `FIO`, `gruppa`, `date`, `t`, `d`, `res_t`, `res_d`) VALUES (NULL, '".$fio."', '".$gruppa."', '".$date."', '".$t."', '".$d."', '".$res_t."', '".$res_d."');");
    }

    function add_test_3($connect, $fio, $gruppa, $shkala_1, $shkala_2, $shkala_3, $shkala_4, $shkala_5, $shkala_6, $shkala_7, $res_1, $res_2, $res_3, $res_4, $res_5, $res_6, $res_7,  $date)
    {
        mysqli_query($connect, "INSERT INTO `test3` (`ID`, `fio`, `gruppa`, `date`, `shkala_1`, `res_1`, `shkala_2`, `res_2`, `shkala_3`, `res_3`, `shkala_4`, `res_4`, `shkala_5`, `res_5`, `shkala_6`, `res_6`, `shkala_7`, `res_7`) 
        VALUES (NULL, '".$fio."', '".$gruppa."', '".$date."', '".$shkala_1."', '".$res_1."', '".$shkala_2."', '".$res_2."', '".$shkala_3."', '".$res_3."', '".$shkala_4."', '".$res_4."', '".$shkala_5."', '".$res_5."', '".$shkala_6."', '".$res_6."', '".$shkala_7."', '".$res_7."');");
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
        $num = 10;
        $connect = MySQL::connect();
        if(!empty($filter)){
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
                        $arResult['GRUPPA'][] = [
                            'GRUPPA' => $item['gruppa'],
                            'FIO' => $item['fio'],
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

    function getAll($filter)
    {
        $connect = MySQL::connect();
        $select_query = 'SELECT * FROM test1, test2, test3';
        $res = mysqli_query($connect, $select_query);
        print_r($res);
        if (!$res) {
            echo 'Ошибка: ' . mysqli_error($connect);
        } else {
            while ($row = mysqli_fetch_assoc($res)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function getQuestions(){
        $arResult = [];
        $result = [];
        $connect = MySQL::connect();
        $select_query = 'SELECT * FROM `questions`';
        $res = mysqli_query($connect, $select_query);
        if(!$res){
            echo 'Ошибка: '.mysqli_error();
        }else {
            while ($row = mysqli_fetch_assoc($res)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function getPanavigation($tableName, $getPage, $numPage, $gruppa){
        $connect = MySQL::connect();
        $num = $numPage;
        $page = $getPage;
        $result = mysqli_query($connect, 'SELECT COUNT(*) FROM '.$tableName.' WHERE gruppa = "'.$gruppa.'"');
        $posts = mysqli_fetch_row($result);
        $total = intval(($posts[0] - 1) / $num) + 1;
        $page = intval($page);
        if(empty($page) or $page < 0) $page = 1;
        if($page > $total) $page = $total;
        $start = $page * $num - $num;
        if($start < 0){
            $start = 0;
        }
        $result = mysqli_query($connect, 'SELECT * FROM '.$tableName.' WHERE gruppa = "'.$gruppa.'" LIMIT '.$start.', '.$num.'');
        while ($row = mysqli_fetch_assoc($result)) {
            $postrow[] = $row;
        };
        $arResult['postrow'] = $postrow;
        $arResult['total'] = $total;
        return $arResult;
    }
}

