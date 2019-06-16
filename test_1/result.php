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
    $arResult = MySQL::GetList('test1', $filter);
    foreach ($arResult['GRUPPA'] as $gruppa => $students) { ?>
        <table>
            <caption>Группа: <?php echo $gruppa ?></caption>
            <tr>
                <th>ФИО</th>
                <th>Сумма</th>
                <th>Результат</th>
            </tr>
            <?php
            foreach ($students as $student) {
                ?>
                <tr>
                    <td><?php echo $student['FIO'] ?></td>
                    <td><?php echo $student['SUMMA'] ?></td>
                    <td><?php echo $student['RESULT'] ?></td>
                </tr>
                <?php
            } ?>
        </table>
    <?php }?>
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