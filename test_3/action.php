<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');

    $mysql = new MySQL();
    $connect = $mysql->connect();
    $straniza = $_REQUEST['page'];
    $fio = $_REQUEST['FIO'];
    $gruppa = $_REQUEST['gruppa'];
    $shkala_1 =  $_REQUEST['shkala_1'];
    $shkala_1 =  $_REQUEST['shkala_2'];
    $shkala_1 =  $_REQUEST['shkala_3'];
    $shkala_1 =  $_REQUEST['shkala_4'];
    $shkala_1 =  $_REQUEST['shkala_5'];
    $shkala_1 =  $_REQUEST['shkala_6'];
    $shkala_1 =  $_REQUEST['shkala_7'];
    $shkala_1_MassKey = [
        2 => 'Нет',
        4 => 'Нет',
        6 => 'Нет',
        13 => 'Да',
        21 => 'Нет',
        23 => 'Нет',
        30 => 'Да',
        32 => 'Да',
        33 => 'Нет',
        38 => 'Нет',
        47 => 'Нет',
        54 => 'Нет',
        79 => 'Нет',
        83 => 'Нет',
        87 => 'Нет',
    ];
    $shkala_2_MassKey = [
        1 => 'Нет',
        10 => 'Нет',
        11 => 'Да',
        22 => 'Да',
        34 => 'Да',
        41 => 'Да',
        44 => 'Да',
        50 => 'Да',
        53 => 'Да',
        55 => 'Нет',
        59 => 'Да',
        61  => 'Нет',
        80 => 'Да',
        86 => 'Нет',
        88 => 'Да',
        91 => 'Да',
        93 => 'Нет',
    ];
    $shkala_3_MassKey = [
        14 => 'Да',
        18 => 'Да',
        22 => 'Да',
        26 => 'Да',
        27 => 'Да',
        31 => 'Да',
        34 => 'Да',
        35 => 'Да',
        43 => 'Да',
        46 => 'Да',
        59 => 'Да',
        60 => 'Да',
        62 => 'Да',
        63 => 'Да',
        64 => 'Да',
        67 => 'Да',
        74 => 'Да',
        81 => 'Да',
        91 => 'Да',
        95 => 'Нет',
    ];
    $shkala_4_MassKey = [
        3 => 'Да',
        6 => 'Да',
        9 => 'Да',
        12 => 'Да',
        16 => 'Да',
        24 => 'Нет',
        27 => 'Да',
        28 => 'Да',
        37 => 'Да',
        39 => 'Да',
        51 => 'Да',
        52 => 'Да',
        58 => 'Да',
        68 => 'Да',
        73 => 'Да',
        76 => 'Нет',
        90 => 'Да',
        91 => 'Да',
        92 => 'Да',
        96 => 'Да',
        98 => 'Да',
    ];
    $shkala_5_MassKey = [
        3 => 'Да',
        5 => 'Да',
        15 => 'Нет',
        16 => 'Да',
        17 => 'Да',
        25 => 'Да',
        37 => 'Да',
        40 => 'Нет',
        42 => 'Да',
        45 => 'Да',
        48 => 'Да',
        49 => 'Да',
        51 => 'Да',
        65 => 'Да',
        66 => 'Да',
        70 => 'Да',
        71 => 'Да',
        72 => 'Да',
        75 => 'Нет',
        77 => 'Да',
        82 => 'Да',
        85 => 'Нет',
        89 => 'Да',
        94 => 'Да',
        97 => 'Да',
    ];
    $shkala_6_MassKey = [
        7 => 'Да',
        19 => 'Да',
        20 => 'Да',
        29 => 'Нет',
        36 => 'Да',
        49 => 'Да',
        56 => 'Да',
        57 => 'Да',
        69 => 'Да',
        70 => 'Да',
        71 => 'Да',
        78 => 'Да',
        84 => 'Да',
        89 => 'Да',
        94 => 'Да',
    ];
    $shkala_7_MassKey = [
        18 => 'Да',
        26 => 'Да',
        31 => 'Да',
        34 => 'Да',
        35 => 'Да',
        42 => 'Да',
        43 => 'Да',
        44 => 'Да',
        48 => 'Да',
        52 => 'Да',
        55 => 'Нет',
        61 => 'Нет',
        62 => 'Да',
        63 => 'Да',
        64 => 'Да',
        67 => 'Да',
        74 => 'Да',
        86 => 'Нет',
        91 => 'Да',
        94 => 'Да',
    ];
    $shkala_1_Tball = [
      0 => 35,
        1 => 44,
        2 => 50,
        3 => 55,
        4 => 58,
        5 => 62,
        6 => 65,
        7 => 67,
        8 => 70,
        9 => 74,
        10 => 85,
        11 => 89,
    ];
    $shkala_2_Tball = [
    0 => 0,
    1 => 27,
    2 => 31,
    3 => 34,
    4 => 37,
    5 => 40,
    6 => 43,
    7 => 46,
    8 => 50,
    9 => 53,
    10 => 56,
    11 => 59,
    12 => 63,
    13 => 66,
    14 =>69,
    15 =>72,
    16 => 75,
    17 =>78,
    18 => 81,
    19 => 84,
    20 => 87,
    21 =>90,
];

    $shkala_3_Tball = [
      0 => 26,
        1 => 28,
        2 => 30,
        3 => 33,
        4 => 35,
        5 => 37,
        6 => 39,
        7 => 42,
        8 => 44,
        9 => 46,
        10 => 48,
        11 => 50,
        12 => 53,
        13 => 55,
        14 =>57,
        15 =>59,
        16 => 62,
        17 =>64,
        18 => 66,
        19 => 68,
        20 => 70,
        21 =>72,
        22 => 74,
        23 => 76,
        24 => 78,
        25 => 80,
        26 => 82,
        27 => 84,
    ];
    $shkala_4_Tball = [
      0 => 0,
	1 => 30,
        2 => 32,
        3 => 34,
        4 => 36,
        5 => 38,
        6 => 40,
        7 => 42,
        8 => 44,
        9 => 46,
        10 => 48,
        11 => 50,
        12 => 53,
        13 => 55,
        14 =>59,
        15 =>60,
        16 => 62,
        17 =>64,
        18 => 66,
        19 => 68,
        20 => 70,
        21 =>72,
        22 => 74,
        23 => 76,
        24 => 78,
        25 => 80,
    ];
    $shkala_5_Tball = [
      0 => 0,
	1 => 38,
        2 => 40,
        3 => 43,
        4 => 45,
        5 => 47,
        6 => 49,
        7 => 52,
        8 => 54,
        9 => 56,
        10 => 58,
        11 => 60,
        12 => 63,
        13 => 65,
        14 =>67,
        15 =>69,
        16 => 72,
        17 =>74,
        18 => 76,
        19 => 78,
    ];
    $shkala_6_Tball = [
      0 => 0,
1 => 28,
        2 => 30,
        3 => 33,
        4 => 35,
        5 => 37,
        6 => 39,
        7 => 42,
        8 => 44,
        9 => 46,
        10 => 48,
        11 => 50,
        12 => 53,
        13 => 55,
        14 =>57,
        15 =>59,
    ];
    $shkala_7_Tball = [
      0 => 0,
1 => 28,
        2 => 30,
        3 => 33,
        4 => 35,
        5 => 37,
        6 => 39,
        7 => 42,
        8 => 44,
        9 => 46,
        10 => 48,
        11 => 50,
        12 => 53,
        13 => 55,
        14 =>57,
        15 =>59,
        16 => 62,
        17 =>64,
        18 => 66,
        19 => 68,
        20 => 70,
        21 =>72,
        22 => 74,
        23 => 76,
        24 => 78,
        25 => 80,
 	26 => 85,
        27 =>87,
        28 =>89,
	29 => 100
    ];
    foreach ($_REQUEST['v'] as $key => $val) {
        if (array_key_exists($key, $shkala_1_MassKey)) {
            if ($shkala_1_MassKey[$key] == $val) {
                $shkala_1 += 1;
            }
        } elseif (array_key_exists($key, $shkala_2_MassKey)) {
            if ($shkala_2_MassKey[$key] == $val) {
                $shkala_2 += 1;
            }
        } elseif (array_key_exists($key, $shkala_3_MassKey)) {
            if ($shkala_3_MassKey[$key] == $val) {
                $shkala_3 += 1;
            }
        } elseif (array_key_exists($key, $shkala_4_MassKey)) {
            if ($shkala_4_MassKey[$key] == $val) {
                $shkala_4 += 1;
            }
        } elseif (array_key_exists($key, $shkala_5_MassKey)) {
            if ($shkala_5_MassKey[$key] == $val) {
                $shkala_5 += 1;
            }
        } elseif (array_key_exists($key, $shkala_6_MassKey)) {
            if ($shkala_6_MassKey[$key] == $val) {
                $shkala_6 += 1;
            }
        } elseif (array_key_exists($key, $shkala_7_MassKey)) {
            if ($shkala_7_MassKey[$key] == $val) {
                $shkala_7 += 1;
            }
        }

        if (array_key_exists($shkala_1, $shkala_1_Tball)) {
            $shkala_1_Tb = $shkala_1_Tball[$shkala_1];
        } else {
            $shkala_1_Tb = end($shkala_1_Tball);
        }

        if (array_key_exists($shkala_2, $shkala_2_Tball)) {
            $shkala_2_Tb = $shkala_2_Tball[$shkala_2];
        } else {
            $shkala_2_Tb = end($shkala_2_Tball);
        }

        if (array_key_exists($shkala_3, $shkala_3_Tball)) {
            $shkala_3_Tb = $shkala_3_Tball[$shkala_3];
        } else {
            $shkala_3_Tb = end($shkala_3_Tball);
        }

        if (array_key_exists($shkala_4, $shkala_4_Tball)) {
            $shkala_4_Tb = $shkala_4_Tball[$shkala_4];
        } else {
            $shkala_4_Tb = end($shkala_4_Tball);
        }

        if (array_key_exists($shkala_5, $shkala_5_Tball)) {
            $shkala_5_Tb = $shkala_5_Tball[$shkala_5];
        } else {
            $shkala_5_Tb = end($shkala_5_Tball);
        }

        if (array_key_exists($shkala_6, $shkala_6_Tball)) {
            $shkala_6_Tb = $shkala_6_Tball[$shkala_6];
        } else {
            $shkala_6_Tb = end($shkala_6_Tball);
        }

        if (array_key_exists($shkala_7, $shkala_7_Tball)) {
            $shkala_7_Tb = $shkala_7_Tball[$shkala_7];
        } else {
            $shkala_7_Tb = end($shkala_7_Tball);
        }

        if ($shkala_1_Tb < 50) {
            $res_1 = 'Нет тенденций';
        } elseif ($shkala_1_Tb >= 50 && $shkala_1_Tb < 70) {
            $res_1 = 'Выявлены тенденции';
        } elseif ($shkala_1_Tb > 70) {
            $res_1 = 'Критические тенденции';
        }

        if ($shkala_2_Tb < 50) {
            $res_2 = 'Нет тенденций';
        } elseif ($shkala_2_Tb >= 50 && $shkala_2_Tb < 70) {
            $res_2 = 'Выявлены тенденции';
        } elseif ($shkala_2_Tb > 70) {
            $res_2 = 'Критические тенденции';
        }


        if ($shkala_3_Tb < 50) {
            $res_3 = 'Нет тенденций';
        } elseif ($shkala_3_Tb >= 50 && $shkala_3_Tb < 70){
            $res_3 = 'Выявлены тенденции';
        } elseif($shkala_3_Tb > 70){
        $res_3 = 'Критические тенденции';
        }

        if ($shkala_4_Tb < 50) {
            $res_4 = 'Нет тенденций';
        } elseif ($shkala_4_Tb >= 50 && $shkala_4 < 70) {
            $res_4 = 'Выявлены тенденции';
        } elseif ($shkala_4_Tb > 70) {
            $res_4 = 'Критические тенденции';
        }

        if ($shkala_5_Tb < 50) {
            $res_5 = 'Нет тенденций';
        } elseif ($shkala_5_Tb >= 50 && $shkala_5 < 70) {
            $res_5 = 'Выявлены тенденции';
        } elseif ($shkala_5_Tb > 70) {
            $res_5 = 'Критические тенденции';
        }

        if ($shkala_6_Tb < 50) {
            $res_6 = 'Нет тенденций';
        } elseif ($shkala_6_Tb >= 50 && $shkala_6_Tb < 70) {
            $res_6 = 'Выявлены тенденции';
        } elseif ($shkala_6_Tb > 70) {
            $res_6 = 'Критические тенденции';
        }

        if ($shkala_7_Tb < 50) {
            $res_7 = 'Нет тенденций';
        } elseif ($shkala_7_Tb >= 50 && $shkala_7_Tb < 70) {
            $res_7 = 'Выявлены тенденции';
        } elseif ($shkala_7_Tb > 70) {
            $res_7 = 'Критические тенденции';
        }
    }
    $_REQUEST = [
        'fio' => $_REQUEST['fio'],
        'gruppa' => $_REQUEST['gruppa'],
        'shkala_1' => $shkala_1,
        'shkala_2' => $shkala_2,
        'shkala_3' => $shkala_3,
        'shkala_4' => $shkala_4,
        'shkala_5' => $shkala_5,
        'shkala_6' => $shkala_6,
        'shkala_7' => $shkala_7,
    ];

    if($straniza == 10) {
        $mysql->add_test_3($connect, $fio, $gruppa, $shkala_1_Tb, $shkala_2_Tb, $shkala_3_Tb, $shkala_4_Tb, $shkala_5_Tb, $shkala_6_Tb, $shkala_7_Tb, $res_1, $res_2, $res_3, $res_4, $res_5, $res_6, $res_7, $date);
    }
header("Location: /test_3/");