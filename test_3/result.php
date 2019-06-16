<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
$page = $_REQUEST['page'];
if (empty($_REQUEST['page'])){
    $page = 1;
    $_REQUEST['page'] = 1;
}
$arResult = [];
$filter = [];
$gruppa = $_REQUEST['gruppa'] ? $_REQUEST['gruppa'] : '569 ПИН';
$arResult = MySQL::getPanavigation('test3', $_REQUEST['page'], 1, $gruppa);
$total = $arResult['total'];
?>
    <html>
    <head>
        <title>Результаты "Определение отделных проявлений поведения"</title>
        <link rel="stylesheet" href="/markup/style.css">
        <script src="/markup/main.js"></script>
    </head>
<body style="background: transparent;">
    <header>
        <nav>
            <ul class="menu-main clearfix">
                <li><a href="/">Главная</a></li>
                <li><a href="/user/result.php">Результаты</a></li>
                <li><a href="/test_1/result.php">Результаты "Интеренет-зависимость"</a></li>
                <li><a href="/test_2/result.php">Результаты "Выявление уровня тревожности"</a></li>
                <li><a class="current" href="/test_3/result.php">Результаты "Определение отдельных проявлений поведения"</a></li>
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
<?php foreach ($arResult['postrow'] as $students) { ?>
    <div>
        <span>Группа: <?php echo $students['gruppa'] ?></span>
        <br>
        <span>Студент: <?php echo $students['fio'] ?></span>
    </div>
    <div class="content">
        <h4>Шкала установки на социально-желательные ответы</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_1'];?></b>
        <p><?php echo $students['res_1']?></p>
        <hr>
        <h4>Шкала склонности к преодолению норм и правил</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_2'];?></b>
        <p><?php echo $students['res_2']?></p>
        <hr>
        <h4>Шкала склонности к аддитивному поведению</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_3'];?></b>
        <p><?php echo $students['res_3']?></p>
        <hr>
        <h4>Шкала склонности к самоповреждающему и саморазрушающему поведению</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_4'];?></b>
        <p><?php echo $students['res_4']?></p>
        <hr>
        <h4>Шкала склонности к агрессии и насилию</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_5'];?></b>
        <p><?php echo $students['res_5']?></p>
        <hr>
        <h4>Шкала волевого контроля эмоциональных реакций</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_1'];?></b>
        <p><?php echo $students['res_1']?></p>
        <hr>
        <h4>Шкала склонности к деликвентному поведению</h4>
        <b>Сумма Т-Баллов: <?php echo $students['shkala_1'];?></b>
        <p><?php echo $students['res_1']?></p>
        <hr>
    </div>
<?php }
?>
        <?php
        // Проверяем нужны ли стрелки назад
        if ($page != 1) $pervpage = '<a href= ?page=1&gruppa='.urlencode(urlencode($_REQUEST['gruppa'])).'><<</a> 
                               <a href= ?page='. ($page - 1) .'&gruppa='.urlencode(urlencode($_REQUEST['gruppa'])).'><</a> ';
        // Проверяем нужны ли стрелки вперед
        if ($page != $total) $nextpage = ' <a href= ?page='. ($page + 1) .'&gruppa='.urlencode($_REQUEST['gruppa']).'>></a> 
                                   <a href= ?page=' .$total. '&gruppa='.urlencode($_REQUEST['gruppa']).'>>></a>';

        // Находим две ближайшие станицы с обоих краев, если они есть
        if($page - 2 > 0) $page2left = ' <a href= ?page='. ($page - 2) .'&gruppa='.urlencode($_REQUEST['gruppa']).'>'. ($page - 2) .'</a> | ';
        if($page - 1 > 0) $page1left = '<a href= ?page='. ($page - 1) .'&gruppa='.urlencode($_REQUEST['gruppa']).'>'. ($page - 1) .'</a> | ';
        if($page + 2 <= $total) $page2right = ' | <a href= ?page='. ($page + 2) .'&gruppa='.urlencode(urlencode($_REQUEST['gruppa'])).'>'. ($page + 2) .'</a>';
        if($page + 1 <= $total) $page1right = ' | <a href= ?page='. ($page + 1) .'&gruppa='.urlencode($_REQUEST['gruppa']).'>'. ($page + 1) .'</a>';

        // Вывод меню
        echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;

        ?>
    </div>
</section>

    <footer>

    </footer>
</body>
    </html>
