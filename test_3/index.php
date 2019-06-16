<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Тест "Определение отдельных проявлений поведения"</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/markup/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/markup/jquery.maskedinput-1.2.2.js"></script>
    <script src="/markup/main.js"></script>
</head>
<body style="background-size: cover;">
<header>
    <nav>
        <ul class="menu-main">
            <li><a href="/">Главная</a></li>
            <li><a href="/test_1/">Тест "Интеренет-зависимость"</a></li>
            <li><a href="/test_2/">Тест "Выявление уровня тревожности"</a></li>
            <li><a href="/test_3/" class="current">Тест "Определение отдельных проявлений поведения"</a></li>
        </ul>
    </nav>
</header>

<section>
    <div class="container">
        <form action="action.php" method="post" id="form_test">
            <div id="fio">
                <ul class="contact_form">
                    <li>
                        <span class="form">Введите ФИО: </span>
                        <input type="text" name='FIO'>
                    </li>
                    <li>
                        <span class="form">Введите группу: </span>
                        <input type="text" name='gruppa'>
                    </li>
                </ul>
                <input type="submit" value="Далее >" id="button_st_3" class="next">
            </div>
            <div class="disabled test" id="part_1">
                <?php
                $part = 2;
                $end = 3;
                $arResult = MySQL::getQuestions();
                foreach($arResult as $key => $question){
                    if($key != 0 && $key % 10 == 0 && $key != 98) {
                            echo '<input type="hidden" value="'.($part-1).'" name="page">';
                            echo '<input type="button" value="Далее >" class="next button_part" data-part="'.$part.'"></div>';
                            echo ' <div class="disabled test" id="part_'.$part.'">';
                            $part += 1;
                }?>
                    <div id="question_<?php echo ($key+1);?>" data-v="<?php echo ($key+1);?>" class="question">
                        <span><?php echo $question['ID']?>. <?php echo $question['question']?></span>
                    </div>
                    <div class="required" >
                        <div>
                            <input type="radio" id="test_3_<?php echo $question['ID']?>_01" name="v[<?php echo $question['ID']?>]" value="Да">
                            <label for="test_3_<?php echo $question['ID']?>_01">Да</label>
                        </div>
                        <div>
                            <input type="radio" id="test_3_<?php echo $question['ID']?>_02" name="v[<?php echo $question['ID']?>]" value="Нет">
                            <label for="test_3_<?php echo $question['ID']?>_02">Нет</label>
                        </div>
                    </div>
                    <?php if($key == 97) {
                        echo '<input type="hidden" value="'.($part-1).'" name="page">';
                        echo '<input type="submit" value="Отправить" class="next mymagicoverbox" data-part="'.$part.'" iddiv="box_1"></div>';
                    }
                }
                ?>


        </form>
    </div>
</section>

<footer>
    <div id="myfond_gris" opendiv=""></div>
    <div id="box_1" class="mymagicoverbox_fenetre" style="left:-225px; width:450px;">
        <div class="mymagicoverbox_fenetreinterieur" style="height:150px; ">

            <div align="center">
                <br>Тестирование пройдено успешно!
                <br><br>


                <div style="width:100px" align="center" class="mymagicoverbox_fermer">ОК</div>


            </div>
        </div>
    </div>
</footer>
</body>
</html>