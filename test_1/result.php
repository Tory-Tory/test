<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');

$arResult = [];
$arResult = MySQL::GetList();?>
    <html>
    <head>

    </head>
<body>
    <header>
        <nav>

        </nav>
    </header>

<section>
<?foreach ($arResult as $item){?>
    <div>
        <span>Группа: <?=$item['gruppa']?></span>
    </div>
    <table>
        <tr>
            <th>ФИО</th>
            <th>Сумма</th>
            <th>Результат</th>
        </tr>
        <tr>
            <td>
                <?=$item['FIO']?>
            </td>
            <td>
                <?=$item['sum']?>
            </td>
            <td>
                <?=$item['res']?>
            </td>
        </tr>
    </table>
<?}
?>
</section>

    <footer>

    </footer>
</body>
    </html>
