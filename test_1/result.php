<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
if($_COOKIE['ADMIN'] == 'Y') {
?>
    <html>
    <head>
        <link rel="stylesheet" href="/markup/style.css">
    </head>
<body style="background:transparent; font-family: Arial;">
    <header>
        <nav>
            <ul class="menu-main clearfix">
                <li><a href="/">Главная</a></li>
                <li><a class="current" href="/user/result.php">Результаты</a></li>
                <li><a href="/test_1/result.php">Результаты "Интеренет-зависимость"</a></li>
                <li><a href="/test_2/result.php">Результаты "Выявление уровня тревожности"</a></li>
                <li><a href="/test_3/result.php">Результаты "Определение отделных проявлений поведения"</a></li>
            </ul>
        </nav>
    </header>

<section>
    <div class="container">
<?
    $arResult = [];
    $filter = ['GRUPPA' => '569 ПИН'];
    $arResult = MySQL::GetList('test1', $filter);
    foreach ($arResult['GRUPPA'] as $gruppa => $students) { ?>
        <div>
            <span>Группа: <?= $gruppa ?></span>
        </div>
        <table>
            <tr>
                <th>ФИО</th>
                <th>Сумма</th>
                <th>Результат</th>
            </tr>
            <?
            foreach ($students as $student) {
                ?>
                <tr>
                    <td><?= $student['FIO'] ?></td>
                    <td><?= $student['SUMMA'] ?></td>
                    <td><?= $student['RESULT'] ?></td>
                </tr>
                <?
            } ?>
        </table>
    <?
    }?>
    </div>
</section>

    <footer>
        <div class="footer">
            <div class="fc">
                <img src="/markup/img/logo.png" alt="logo" class=" logo">
                <p class="kkep">© 2016. Краснодарский колледж <br>электронного приборостроения.<br>ГБПОУ КК ККЭП</p>
                <div style="width: 200px"></div>
            </div>
        </div>
    </footer>

</body>
    </html>
<?} else {
    echo 'Данная страница доступна только для администратора!';
}
?>