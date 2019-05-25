<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php'); ?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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

<div class="main wrapper">
    <div class="container content">
        <div class="row">
            <div class="welcome">
                Добро пожаловать на сайт психологического тестирования!
            </div>
            <div class="other">
                Пожалуйста, пройдите все три теста.
            </div>
            <div class="other">
                Помните, группа записывается в формате <span class="maska-gr">569 ПИН</span>!
            </div>
        </div>
    </div>
</div>

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