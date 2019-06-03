<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');?>
<?if(!empty($_REQUEST['login']) && !empty($_REQUEST['password'])) {
    $filter = [
        'LOGIN' => $_REQUEST['login'],
        'PASS' => $_REQUEST['password'],
    ];
    $res = MySQL::registeredUser($filter);
    if($res == true){
        setcookie('AUTORIZE', 'Y', time()+60*60*24, '/');
    }

    $filter = [
        'LOGIN' => $_REQUEST['login'],
        'PASS' => $_REQUEST['password'],
    ];
    $admin = new MySQL;
    $admin = $admin->isAdmin($filter);
    if($admin == true){
        setcookie('ADMIN', 'Y', time()+60*60*24, '/');
    }
}
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/markup/style.css">
</head>
<body>
<header>
    <nav>
        <ul class="menu-main">
            <li><a href="/">Главная</a></li>
            <?
        if($_COOKIE['AUTORIZE'] == 'Y'){?>
            <li><a class="current" href="/user/result.php">Результаты</a></li>
            <?}?>
            <li><a href="/test_1/result.php">Резултаты "Интеренет-зависимость"</a></li>
            <li><a href="/test_2/result.php">Резултаты "Выявление уровня тревожности"</a></li>
            <li><a href="/test_3/result.php">Резултаты "Определение отделных проявлений поведения"</a></li>
        </ul>
    </nav>
</header>
    <section>
        <?
        if($_COOKIE['AUTORIZE'] == 'Y'){
            echo 'Авторизован';
        }else{?>
        <div class="container">
            <form action="" id="admin">
                <ul class="contact_form">
                    <li>
                        <span class="form">Введите логин: </span>
                        <input type="text" name="login" id="login">
                    </li>
                    <li>
                        <span class="form">Введите пароль: </span>
                        <input type="password" name="password" id="password">
                    </li>
                </ul>
                <input type="submit" value="Вход" id="button_test">
            </form>
        <?}?>
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