<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php'); ?>

<!DOCTYPE HTML>
<html>
	<head>
        <title>Тест "Интеренет-зависимость"</title>
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
                <li><a href="/test_2/"  class="current">Тест "Выявление уровня тревожности"</a></li>
                <li><a href="/test_3/">Тест "Определение отдельных проявлений поведения"</a></li>
            </ul>
        </nav>
    </header>
		<section style="">
            <div class="container">
                <form action="action.php" method="post" id="form_test_td">
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
                        <input type="button" value="Далее >" id="button_st" class="next">
                    </div>

                    <div class="disabled test" id="part_1" data-part="1">
                        <div id="question_1" data-t="1" data-v="1" data-this="t" class="question">
                            <span>1. Я напряжен. Мне не по себе</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_01_01" name="t[1]" value="3">
                                <label for="test_2_01_01">все время</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_01_02" name="t[1]" value="2">
                                <label for="test_2_01_02">часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_01_03" name="t[1]" value="1">
                                <label for="test_2_01_03">время от времени, иногда</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_01_04" name="t[1]" value="0">
                                <label for="test_2_01_04">совсем не испытываю</label>
                            </div>
                        </div>
                        <div id="question_2" data-d="1" class="question" data-this="d">
                            <span>2. То, что приносило мне большое удовольствие, и сейчас вызывает такое же чувство </span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_02_01" name="d[1]" value="1">
                                <label for="test_2_02_01">определенно это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_02_02" name="d[1]" value="2">
                                <label for="test_2_02_02">наверное, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_02_03" name="d[1]" value="3">
                                <label for="test_2_02_03">лишь в очень малой степени это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_02_04" name="d[1]" value="4">
                                <label for="test_2_02_04">это совсем не так</label>
                            </div>
                        </div>
                        <div id="question_3" data-t="2" class="question" data-this="t">
                            <span>3. Мне страшно. Кажется, будто что-то ужасное может вот-вот случиться </span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_03_01" name="t[2]" value="3">
                                <label for="test_2_03_01">определенно это так, и страх очень сильный</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_03_02" name="t[2]" value="2">
                                <label for="test_2_03_02">да, это так, но страх не очень сильный</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_03_03" name="t[2]" value="1">
                                <label for="test_2_03_03">иногда, но это меня не беспокоит</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_03_04" name="t[2]" value="0">
                                <label for="test_2_03_04">совсем не испытываю</label>
                            </div>
                        </div>
                        <div id="question_4" data-d="2" class="question" data-this="d">
                            <span>4. Я способен рассмеяться и увидеть в том или ином событии смешное </span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_04_01" name="d[2]" value="0">
                                <label for="test_2_04_01">определенно, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_04_02" name="d[2]" value="1">
                                <label for="test_2_04_02">наверное, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_04_03" name="d[2]" value="2">
                                <label for="test_2_04_03">лишь в очень малой степени это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_04_04" name="d[2]" value="3">
                                <label for="test_2_04_04">совсем не способен</label>
                            </div>
                        </div>
                        <div id="question_5" data-t="3" class="question" data-this="t">
                            <span>5. Беспокойные мысли крутятся у меня в голове</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_05_01" name="t[3]" value="3">
                                <label for="test_2_05_01">постоянно</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_05_02" name="t[3]" value="2">
                                <label for="test_2_05_02">большую часть времени</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_05_03" name="t[3]" value="1">
                                <label for="test_2_05_03">время от времени</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_05_04" name="t[3]" value="0">
                                <label for="test_2_05_04">только иногда</label>
                            </div>
                        </div>
                        <div id="question_6" data-d="3" class="question" data-this="d">
                            <span>6. Отмечаете, что перестали делать успехи в учебе или работе, так как слишком много времени проводите в сети?</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_06_01" name="d[3]" value="3">
                                <label for="test_2_06_01">совсем не чувствую</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_06_02" name="d[3]" value="2">
                                <label for="test_2_06_02">очень редко</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_06_03" name="d[3]" value="1">
                                <label for="test_2_06_03">иногда</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_06_04" name="d[3]" value="0">
                                <label for="test_2_06_04">практически все время</label>
                            </div>
                        </div>
                        <div id="question_7" data-t="4" class="question" data-this="t">
                            <span>7. Я легко могу сесть и расслабиться</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_07_01" name="t[4]" value="0">
                                <label for="test_2_07_01">определенно, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_07_02" name="t[4]" value="1">
                                <label for="test_2_07_02">наверное, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_07_03" name="t[4]" value="2">
                                <label for="test_2_07_03">лишь изредка это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_07_04" name="t[4]" value="3">
                                <label for="test_2_07_04">совсем не могу</label>
                            </div>
                        </div>
                        <div id="question_8" data-d="4" class="question" data-this="d">
                            <span>8. Мне кажется, что я стал все делать очень медленно</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_08_01" name="d[4]" value="3">
                                <label for="test_2_08_01">практически все время</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_08_02" name="d[4]" value="2">
                                <label for="test_2_08_02">часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_08_03" name="d[4]" value="1">
                                <label for="test_2_08_03">иногда</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_08_04" name="d[4]" value="0">
                                <label for="test_2_08_04">совсем нет</label>
                            </div>
                        </div>
                        <div id="question_9" data-t="5" class="question" data-this="t">
                            <span>9. Я испытываю внутренне напряжение или дрожь</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_09_01" name="t[5]" value="0">
                                <label for="test_2_09_01">совсем не испытываю</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_09_02" name="t[5]" value="1">
                                <label for="test_2_09_02">иногда</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_09_03" name="t[5]" value="2">
                                <label for="test_2_09_03">часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_09_04" name="t[5]" value="3">
                                <label for="test_2_09_04">очень часто</label>
                            </div>
                        </div>
                        <div id="question_10" data-d="5" class="question" data-this="d">
                            <span>10. Я не слежу за своей внешностью</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_10_01" name="d[5]" value="3">
                                <label for="test_2_10_01">определенно это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_10_02" name="d[5]" value="2">
                                <label for="test_2_10_02">я не уделяю этому столько времени, сколько нужно</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_10_03" name="d[5]" value="1">
                                <label for="test_2_10_03">может быть, я стал меньше уделять этому внимания</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_10_04" name="d[5]" value="0">
                                <label for="test_2_10_04">я слежу за собой так же, как и раньше</label>
                            </div>
                        </div>
                        <input type="submit" value="Далее >" class="button_part_1 next" data-part="1">
                    </div>
                    <div class="disabled test" id="part_2" >
                        <div id="question_11" data-t="6" class="question" data-v="11" data-this="t">
                            <span>11. Я не могу усидеть на месте, словно мне постоянно нужно двигаться</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_11_01" name="t[6]" value="0">
                                <label for="test_2_11_01">определенно, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_11_02" name="t[6]" value="1">
                                <label for="test_2_11_02">наверное, это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_11_03" name="t[6]" value="2">
                                <label for="test_2_11_03">лишь в очень малой степени это так</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_11_04" name="t[6]" value="3">
                                <label for="test_2_11_04">совсем не способен</label>
                            </div>
                        </div>
                        <div id="question_12" data-d="6" class="question" data-this="d">
                            <span>12. Я считаю, что мои дела (занятия, увлечения) могут принести мне чувство удовлетворения</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_12_01" name="d[6]" value="0">
                                <label for="test_2_12_01">точно так, как и обычно</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_12_02" name="d[6]" value="1">
                                <label for="test_2_12_02">да, но не в той степени, как раньше</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_12_03" name="d[6]" value="2">
                                <label for="test_2_12_03">значительно меньше, чем раньше</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_12_04" name="d[6]" value="3">
                                <label for="test_2_12_04">совсем не считаю</label>
                            </div>
                        </div>
                        <div id="question_13" data-t="7" class="question" data-this="t">
                            <span>13. У меня бывает внезапное чувство паники</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_13_01" name="t[7]" value="3">
                                <label for="test_2_13_01">действительно, очень часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_13_02" name="t[7]" value="2">
                                <label for="test_2_13_02">довольно часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_13_03" name="t[7]" value="1">
                                <label for="test_2_13_03">не так уж часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_13_04" name="t[7]" value="0">
                                <label for="test_2_13_04">совсем не бывает</label>
                            </div>
                        </div>
                        <div id="question_14" data-d="7" class="question" data-this="d">
                            <span>14. Я могу получить удовольствие от хорошей книги, фильма, радио- или телепрограммы</span>
                        </div>
                        <div class="required">
                            <div>
                                <input  type="radio" id="test_2_14_01" name="d[7]" value="0">
                                <label for="test_2_14_01">часто</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_14_02" name="d[7]" value="1">
                                <label for="test_2_14_02">иногда</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_14_03" name="d[7]" value="2">
                                <label for="test_2_14_03">редко</label>
                            </div>
                            <div>
                                <input  type="radio" id="test_2_14_04" name="d[7]" value="3">
                                <label for="test_2_14_04">очень редко</label>
                            </div>
                        </div>
                        <input type="submit" value="Отправить" class="next mymagicoverbox" data-part="2" iddiv="box_1">
                    </div>

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