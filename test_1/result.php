<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
?>
    <html>
    <head>
        <link rel="stylesheet" href="/markup/style.css">
    </head>
<body>
    <header>
        <nav>

        </nav>
    </header>

<section>
<?
if($_COOKIE['ADMIN'] == 'Y') {
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
    }
} else {
    echo 'Данная страница доступна только для администратора';
}
?>

</section>

    <footer>

    </footer>
</body>
    </html>
