<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');

$arResult = [];
$filter = [];
$arResult = MySQL::GetList('test2', $filter);
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
<?foreach ($arResult['GRUPPA'] as $gruppa => $students) { ?>
    <div>
        <span>Группа: <?= $gruppa ?></span>
    </div>
    <table>
    <tr>
        <th>ФИО</th>
        <th>T</th>
        <th>Д</th>
    </tr>
    <?
    foreach ($students as $student) {
        ?>
        <tr>
            <td>
                <?= $student['FIO'] ?>
            </td>
            <td>
                <?= $student['T'] ?>
            </td>
            <td>
                <?= $student['D'] ?>
            </td>
        </tr>
    <?
    }?>
    </table>
<?}
?>

</section>

    <footer>

    </footer>
</body>
    </html>
