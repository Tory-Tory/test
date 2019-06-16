<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');

if($_COOKIE['ADMIN'] == 'Y') {
    ?>
    <html>
    <head>
        <title>Результаты "Интеренет-зависимость"</title>
        <link rel="stylesheet" href="/markup/style.css">
        <script src="/markup/main.js"></script>
    </head>
    <body style="background:transparent; font-family: Arial;">
    <header>
        <nav>
            <ul class="menu-main clearfix">
                <li><a href="/">Главная</a></li>
                <li><a href="/user/result.php">Результаты</a></li>
                <li><a class="current" href="/test_1/result.php">Результаты "Интеренет-зависимость"</a></li>
                <li><a href="/test_2/result.php">Результаты "Выявление уровня тревожности"</a></li>
                <li><a href="/test_3/result.php">Результаты "Определение отдельных проявлений поведения"</a></li>
                <li><a href="/test_3/result.php">Общая таблица резултатов</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="container">
            <form action="">
                <ul class="contact_form">
                    <li>
                        <span class="form" style="color: black;">Группа: </span>
                        <input type="text" name='gruppa' value="<?php echo $_REQUEST['gruppa']?>">
                    </li>
                </ul>
                <input type="submit" value="Отправить" class="gruppa">
            </form>
            <?php
            $arResult = [];
            $gruppa = $_REQUEST['gruppa'] ? $_REQUEST['gruppa'] : '569 ПИН';
            $filter = ['GRUPPA' => $gruppa,];
            $arResult['test1'] = MySQL::GetList('test1', $filter);
            $arResult['test2'] = MySQL::GetList('test2', $filter);
            $arResult['test3'] = MySQL::GetList('test3', $filter);
            foreach ($arResult['test1']['GRUPPA'] as $item){
                $all[$item['FIO']]['FIO'] = $item['FIO'];
                $all[$item['FIO']]['SUMMA'] = $item['SUMMA'];
            }
            foreach ($arResult['test2']['GRUPPA'] as $item){
                $all[$item['FIO']]['T'] = $item['T'];
                $all[$item['FIO']]['D'] = $item['D'];
            }
            foreach ($arResult['test3']['GRUPPA'] as $item){
                $all[$item['FIO']]['T'] = $item['RESULT_SHKALA_1'];
                $all[$item['FIO']]['D'] = $item['RESULT_SHKALA_2'];
                $all[$item['FIO']]['D'] = $item['RESULT_SHKALA_3'];
                $all[$item['FIO']]['D'] = $item['RESULT_SHKALA_4'];
                $all[$item['FIO']]['D'] = $item['RESULT_SHKALA_5'];
                $all[$item['FIO']]['D'] = $item['RESULT_SHKALA_6'];
                $all[$item['FIO']]['D'] = $item['RESULT_SHKALA_7'];
            }?>
                <table>
                    <caption>Группа: <?php echo $gruppa ?></caption>
                    <tr>
                        <th>ФИО</th>
                        <th>Сумма</th>
                        <th>Т</th>
                        <th>Д</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                    </tr>
                    <?php
                    foreach ($arResult['test1']['GRUPPA'] as $gruppa => $students) {
                        foreach ($students as $student) {
                            ?>
                                <td><?php echo $student['FIO'] ?></td>
                                <td><?php echo $student['SUMMA'] ?></td>
                            <?php
                        }
                    }?>
                        <?php
                    foreach ($arResult['test2']['GRUPPA'] as $gruppa => $students) {
                        foreach ($students as $student) {
                            ?>
                                <td><?php echo $student['T'] ?></td>
                                <td><?php echo $student['D'] ?></td>
                            <?php
                        }
                    }?>
                        <?php
                    foreach ($arResult['test3']['GRUPPA'] as $gruppa => $students) {
                        foreach ($students as $student) {
                            ?>
                                <td><?php echo $student['RESULT_SHKALA_1'] ?></td>
                                <td><?php echo $student['RESULT_SHKALA_2'] ?></td>
                                <td><?php echo $student['RESULT_SHKALA_3'] ?></td>
                                <td><?php echo $student['RESULT_SHKALA_4'] ?></td>
                                <td><?php echo $student['RESULT_SHKALA_5'] ?></td>
                                <td><?php echo $student['RESULT_SHKALA_6'] ?></td>
                                <td><?php echo $student['RESULT_SHKALA_7'] ?></td>
                            <?php
                        }
                    }?>
                            </tr>
                        </table>
        </div>
    </section>

    <footer>
    </footer>

    </body>
    </html>
    <?php
} else {
    echo 'Данная страница доступна только для администратора!';
}
?>