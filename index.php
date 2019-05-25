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
                <li><a href="/user/result.php">Результаты</a></li>
                <?
            }
            ?>
            <li><a href="/test_1/">Тест "Интеренет-зависимость"</a></li>
            <li><a href="/test_2/">Тест "Выявление уровня тревожности"</a></li>
            <li><a href="/test_3/">Тест "Определение отделных проявлений поведения"</a></li>
        </ul>
    </nav>
</header>

<div class="main">
    <div class="container">
        <div class="row">
            <p>
                Добро пожаловать на сайт психологического тестирования!
            </p>
            <p>
                Пожалуйста, пройдите все три теста.
            </p>
            <p>
                Помните, группа записывается в формате <span class="maska-gr">569 ПИН</span>!
            </p>
        </div>
    </div>
</div>

<footer>

</footer>
</body>
</html>