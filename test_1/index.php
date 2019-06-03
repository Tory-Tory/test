<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php'); ?>

<!DOCTYPE HTML>
<html>
	<head>
        <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/markup/style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/markup/main.js"></script>
	</head>
	<body style="background-size: cover;">
    <header>
        <nav>
            <ul class="menu-main">
                <li><a href="/" class="current">Главная</a></li>
                <li><a href="/test_1/">Тест "Интеренет-зависимость"</a></li>
                <li><a href="/test_2/">Тест "Выявление уровня тревожности"</a></li>
                <li><a href="/test_3/">Тест "Определение отделных проявлений поведения"</a></li>
            </ul>
        </nav>
    </header>
		<section style="">
            <div class="container">
            <form action="" id="student"  style="display: none">
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
                <input type="submit" value="Далее >" id="button_test">
            </form>
            <form action="action.php"  method="post" id="test">
                <div class="part_1">
                <div class="question">
                    <span>1. Замечаете ли Вы, что проводите в интернете больше времени, чем намеревались?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_01" name="v[1]" value="1">
                        <label for="test_1_01_01"><span></span>Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_02" name="v[1]" value="2">
                        <label for="test_1_01_02"><span></span>Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_03" name="v[1]" value="3">
                        <label for="test_1_01_03"><span></span>Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_04" name="v[1]" value="4">
                        <label for="test_1_01_04"><span></span>Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_05" name="v[1]" value="5">
                        <label for="test_1_01_05"><span></span>Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>2. Пренебрегаете ли вы домашними делами, что бы подольше побродить по сети? </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_01" name="v[2]" value="1">
                        <label for="test_1_02_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_02" name="v[2]" value="2">
                        <label for="test_1_02_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_03" name="v[2]" value="3">
                        <label for="test_1_02_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_04" name="v[2]" value="4">
                        <label for="test_1_02_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_05" name="v[2]" value="5">
                        <label for="test_1_02_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>3. Предпочитаете пребывание в сети интимному общению с партнером? </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_01" name="v[3]" value="1">
                        <label for="test_1_03_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_02" name="v[3]" value="2">
                        <label for="test_1_03_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_03" name="v[3]" value="3">
                        <label for="test_1_03_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_04" name="v[3]" value="4">
                        <label for="test_1_03_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_05" name="v[3]" value="5">
                        <label for="test_1_03_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>4. Заводите знакомства с пользователями интернета, находясь в онлайне? </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_01" name="v[4]" value="1">
                        <label for="test_1_04_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_02" name="v[4]" value="2">
                        <label for="test_1_04_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_03" name="v[4]" value="3">
                        <label for="test_1_04_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_04" name="v[4]" value="4">
                        <label for="test_1_04_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_05" name="v[4]" value="5">
                        <label for="test_1_04_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>5. Раздражаетесь из-за того, что окружающие интересуются количеством времени, проводимым вами в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_01" name="v[5]" value="1">
                        <label for="test_1_05_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_02" name="v[5]" value="2">
                        <label for="test_1_05_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_03" name="v[5]" value="3">
                        <label for="test_1_05_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_04" name="v[5]" value="4">
                        <label for="test_1_05_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_05" name="v[5]" value="5">
                        <label for="test_1_05_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>6. Отмечаете, что перестали делать успехи в учебе или работе, так как слишком много времени проводите в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_01" name="v[6]" value="1">
                        <label for="test_1_06_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_02" name="v[6]" value="2">
                        <label for="test_1_06_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_03" name="v[6]" value="3">
                        <label for="test_1_06_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_04" name="v[6]" value="4">
                        <label for="test_1_06_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_05" name="v[6]" value="5">
                        <label for="test_1_06_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>7. Проверяете электронную почту раньше, чем сделаете что-то другое, более необходимое?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_01" name="v[7]" value="1">
                        <label for="test_1_07_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_02" name="v[7]" value="2">
                        <label for="test_1_07_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_03" name="v[7]" value="3">
                        <label for="test_1_07_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_04" name="v[7]" value="4">
                        <label for="test_1_07_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_05" name="v[7]" value="5">
                        <label for="test_1_07_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>8. Отмечаете, что снижается производительность труда из-за увлечения интернетом?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_08_01" name="v[8]" value="1">
                        <label for="v[8]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_08_02" name="v[8]" value="2">
                        <label for="v[8]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_08_03" name="v[8]" value="3">
                        <label for="v[8]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_08_04" name="v[8]" value="4">
                        <label for="v[8]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_08_05" name="v[8]" value="5">
                        <label for="v[8]">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>9. Занимаете оборонительную позицию и скрытничаете, когда вас спрашивают, чем вы занимаетесь в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_01" name="v[9]" value="1">
                        <label for="test_1_09_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_02" name="v[9]" value="2">
                        <label for="test_1_09_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_03" name="v[9]" value="3">
                        <label for="test_1_09_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_04" name="v[9]" value="4">
                        <label for="test_1_09_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_05" name="v[9]" value="5">
                        <label for="test_1_09_05">Всегда</label>
                    </div>
                </div>
                <div class="question">
                    <span>10. Блокируете беспокоящие мысли о вашей реальной жизни мыслями об интернете?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_01" name="v[10]" value="1">
                        <label for="test_1_10_01">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_02" name="v[10]" value="2">
                        <label for="test_1_10_02">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_03" name="v[10]" value="3">
                        <label for="test_1_10_03">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_04" name="v[10]" value="4">
                        <label for="test_1_10_04">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_05" name="v[10]" value="5">
                        <label for="test_1_10_05">Всегда</label>
                    </div>
                    <div class="panavigation">
                        <span style="font-family: 'Tinos', serif;
    width: 120px;
    height: 55px;
    font-size: 17px;
    margin: 35px;
    text-decoration: none;
    border: none;
    background-image: none;
    background-color: transparent;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border: 2px solid white;
    background: rgba(0,0, 139, 1);
    color: white;
    font-size: 23px;
    padding: 15px 25px;">1</span>
                        <span style="
    font-family: 'Tinos', serif;
    width: 120px;
    height: 55px;
    font-size: 17px;
    text-decoration: none;
    border: none;
    background-image: none;
    background-color: transparent;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border: 2px solid white;
    background: rgba(255,255, 255, 0.5);
    color: darkblue;
    font-size: 23px;
    padding: 15px 25px;
">2</span>
                        <input type="submit" value="Далее >" id="button_test">
                    </div>
                </div>
                </div>
                    <div class="part_2" style="display: none;">
                    <div class="question">
                        <span>11. Обнаруживаете себя предвкушающим очередной выход в Сеть?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_01" name="v[11]" value="1">
                            <label for="v[11]"><span></span>Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_02" name="v[11]" value="2">
                            <label for="v[11]"><span></span>Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_03" name="v[11]" value="3">
                            <label for="v[11]"><span></span>Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_04" name="v[11]" value="4">
                            <label for="v[11]"><span></span>Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_05" name="v[11]" value="5">
                            <label for="v[11]"><span></span>Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>12. Ощущаете, что жизнь без интернета скучна, пуста и безрадостна?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_12_01" name="v[12]" value="1">
                            <label for="v[12]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_12_02" name="v[12]" value="2">
                            <label for="v[12]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_12_03" name="v[12]" value="3">
                            <label for="v[12]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_12_04" name="v[12]" value="4">
                            <label for="v[12]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_12_05" name="v[12]" value="5">
                            <label for="v[12]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>13. Ругаетесь, кричите или иным образом выражаете свою досаду, когда кто-то пытается отвлечь вас от пребывания в сети?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_13_01" name="v[13]" value="1">
                            <label for="v[13]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_13_02" name="v[13]" value="2">
                            <label for="v[13]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_13_03" name="v[13]" value="3">
                            <label for="v[13]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_13_04" name="v[13]" value="4">
                            <label for="v[13]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_13_05" name="v[13]" value="5">
                            <label for="v[13]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>14. Пренебрегаете сном, засиживаясь в интернете допоздна?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_14_01" name="v[14]" value="1">
                            <label for="v[14]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_14_02" name="v[14]" value="2">
                            <label for="v[14]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_14_03" name="v[14]" value="3">
                            <label for="v[14]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_14_04" name="v[14]" value="4">
                            <label for="v[14]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_14_05" name="v[14]" value="5">
                            <label for="v[14]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>15. Предвкушаете, чем займетесь в интернете, находясь в офлайне?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_15_01" name="v[15]" value="1">
                            <label for="v[15]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_15_02" name="v[15]" value="2">
                            <label for="v[15]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_15_03" name="v[15]" value="3">
                            <label for="v[15]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_15_04" name="v[15]" value="4">
                            <label for="v[15]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_15_05" name="v[15]" value="5">
                            <label for="v[15]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>16. Говорите себе: "Еще минутку", сидя в сети?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_16_01" name="v[16]" value="1">
                            <label for="v[16]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_16_02" name="v[16]" value="2">
                            <label for="v[16]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_16_03" name="v[16]" value="3">
                            <label for="v[16]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_16_04" name="v[16]" value="4">
                            <label for="v[16]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_16_05" name="v[16]" value="5">
                            <label for="v[16]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>17. Терпите поражение в попытках сократить время, проводимое в онлайне?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_17_01" name="v[17]" value="1">
                            <label for="v[17]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_17_02" name="v[17]" value="2">
                            <label for="v[17]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_17_03" name="v[17]" value="3">
                            <label for="v[17]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_17_04" name="v[17]" value="4">
                            <label for="v[17]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_17_05" name="v[17]" value="5">
                            <label for="v[17]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>18. Пытаетесь скрыть количество времени, проводимое вами в сети?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_18_01" name="v[18]" value="1">
                            <label for="v[18]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_18_02" name="v[18]" value="2">
                            <label for="v[18]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_18_03" name="v[18]" value="3">
                            <label for="v[18]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_18_04" name="v[18]" value="4">
                            <label for="v[18]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_18_05" name="v[18]" value="5">
                            <label for="v[18]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>19. Вместо того, чтобы выбраться куда-либо с друзьями, выбираете интернет?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_19_01" name="v[19]" value="1">
                            <label for="v[19]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_19_02" name="v[19]" value="2">
                            <label for="v[19]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_19_03" name="v[19]" value="3">
                            <label for="v[19]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_19_04" name="v[19]" value="4">
                            <label for="v[19]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_19_05" name="v[19]" value="5">
                            <label for="v[19]">Всегда</label>
                        </div>
                    </div>
                    <div class="question">
                        <span>20. Испытываете депрессию, подавленность или нервозность, будучи вне сети и отмечаете, что это состояние проходит, как только вы оказываетесь в онлайне?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_20_01" name="v[20]" value="1">
                            <label for="v[20]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_20_02" name="v[20]" value="2">
                            <label for="v[20]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_20_03" name="v[20]" value="3">
                            <label for="v[20]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_20_04" name="v[20]" value="4">
                            <label for="v[20]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_20_05" name="v[20]" value="5">
                            <label for="v[20]">Всегда</label>
                        </div>
                    </div>
                <input type="submit" id="button_test" value="Отправить" iddiv="box_1" class="mymagicoverbox">
                    </div>
            </form>
            </div>
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
	</body>
</html>