<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
if($_COOKIE['ADMIN'] == 'Y') {
?>
    <html>
    <head>
        <link rel="stylesheet" href="/markup/style.css">
    </head>
<body>
    <header>
        <nav>
            <ul class="menu-main">
                <li><a href="/">Главная</a></li>
                <li><a class="current" href="/user/result.php">Резулаты</a></li>
                <li><a href="/test_1/result.php">Резултаты "Интеренет-зависимость"</a></li>
                <li><a href="/test_2/result.php">Резултаты "Выявление уровня тревожности"</a></li>
                <li><a href="/test_3/result.php">Резултаты "Определение отделных проявлений поведения"</a></li>
            </ul>
        </nav>
    </header>

<section>
<?
    $arResult = [];
    $filter = [];
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
                    <td>
                        <?= $student['FIO'] ?>
                    </td>
                    <td>
                        <?= $student['SUMMA'] ?>
                    </td>
                    <td>
                        <?= $student['RESULT'] ?>
                    </td>
                </tr>
                <?
            } ?>
        </table>
    <?
    }?>s
</section>

    <footer>

    </footer>
</body>
    </html>
<?} else {
    echo 'Данная страница доступна только для администратора';
}
?>