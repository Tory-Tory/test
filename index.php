<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php'); ?>
<html>
<head>
    <link rel="stylesheet" href="/markup/style.css">
</head>
<body>
<header>
    <nav>
        <ul class="menu-main">
            <li><a href="/" class="current">Главная</a></li>
            <?if($_COOKIE['ADMIN'] == 'Y') {
                ?>
                <li><a href="/user/result.php">Резултаты</a></li>
                <?
            }
            ?>
            <li><a href="/test_1/">Тест "Интеренет-зависимость"</a></li>
            <li><a href="/test_2/">Тест "Выявление уровня тревожности"</a></li>
            <li><a href="/test_3/">Тест "Определение отделных проявлений поведения"</a></li>
        </ul>
    </nav>
</header>

<section>

</section>

<footer>

</footer>
</body>
</html>