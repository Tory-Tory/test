<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
?>
<html>
<head>
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/markup/style.css">
</head>
<body>
<header>

        <nav>
            <ul class="menu-main">
                <li><a href="/" class="current">Главная</a></li>
                <?php if($_COOKIE['ADMIN'] == 'Y') {
                    ?>
                    <li><a href="/user/result.php">Результаты</a></li>
                    <?php }?>
                <li><a href="/test_1/">Тест "Интеренет-зависимость"</a></li>
                <li><a href="/test_2/">Тест "Выявление уровня тревожности"</a></li>
                <li><a href="/test_3/">Тест "Определение отдельных проявлений поведения"</a></li>
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
    </footer>
</body>
</html>