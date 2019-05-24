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


    <section>
        <?
        if($_COOKIE['AUTORIZE'] == 'Y'){
            echo 'Авторизован';
        }else{?>
        <form action="" method="post">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
            <label for="password">Пароль</label>
            <input type="text" name="password" id="password">
            <input type="submit" value="send">
        </form>
        <?}?>
    </section>
</body>
</html>