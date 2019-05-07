<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php');

	echo 'Welcome to test 3';
?>

<!DOCTYPE HTML>
<html>
	<head>
		
	</head>
	<body>
		<header>
			<nav>
				
			</nav>
		</header>

		<section>
            <form action="action.php" method="post">
                <div>
                    <input type="text" name='FIO'>
                </div>
                <div>
                    <input type="text" name='gruppa'>
                </div>
                <div>
                    <span>1. Я напряжен. Мне не по себе</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_01_01" name="t[1]" value="3">
                        <label for="t[1]">все время</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_01_02" name="t[1]" value="2">
                        <label for="t[1]">часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_01_03" name="t[1]" value="1">
                        <label for="t[1]">время от времени, иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_01_04" name="t[1]" value="0">
                        <label for="t[1]">совсем не испытываю</label>
                    </div>
                </div>
                <div>
                    <span>2. То, что приносило мне большое удовольствие, и сейчас вызывает такое же чувство </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_02_01" name="d[1]" value="1">
                        <label for="d[1]">определенно это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_02_02" name="d[1]" value="2">
                        <label for="d[1]">наверное, это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_02_03" name="d[1]" value="3">
                        <label for="d[1]">лишь в очень малой степени это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_02_04" name="d[1]" value="4">
                        <label for="d[1]">это совсем не так</label>
                    </div>
                </div>
                <div>
                    <span>3. Мне страшно. Кажется, будто что-то ужасное может вот-вот случиться </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_03_01" name="t[2]" value="3">
                        <label for="t[2]">определенно это так, и страх очень сильный</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_03_02" name="t[2]" value="2">
                        <label for="t[2]">да, это так, но страх не очень сильный</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_03_03" name="t[2]" value="1">
                        <label for="t[2]">иногда, но это меня не беспокоит</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_03_04" name="t[2]" value="0">
                        <label for="t[2]">совсем не испытываю</label>
                    </div>
                </div>
                <div>
                    <span>4. Я способен рассмеяться и увидеть в том или ином событии смешное </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_04_01" name="d[2]" value="0">
                        <label for="d[2]">определенно, это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_04_02" name="d[2]" value="1">
                        <label for="d[2]">наверное, это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_04_03" name="d[2]" value="2">
                        <label for="d[2]">лишь в очень малой степени это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_04_04" name="d[2]" value="3">
                        <label for="d[2]">совсем не способен</label>
                    </div>
                </div>
                <div>
                    <span>5. Беспокойные мысли крутятся у меня в голове</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_05_01" name="t[3]" value="3">
                        <label for="t[3]">постоянно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_05_02" name="t[3]" value="2">
                        <label for="t[3]">большую часть времени</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_05_03" name="t[3]" value="1">
                        <label for="t[3]">время от времени</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_05_04" name="t[3]" value="0">
                        <label for="t[3]">только иногда</label>
                    </div>
                </div>
                <div>
                    <span>6. Отмечаете, что перестали делать успехи в учебе или работе, так как слишком много времени проводите в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_06_01" name="d[3]" value="3">
                        <label for="d[3]">совсем не чувствую</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_06_02" name="d[3]" value="2">
                        <label for="d[3]">очень редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_06_03" name="d[3]" value="1">
                        <label for="d[3]">иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_06_04" name="d[3]" value="0">
                        <label for="d[3]">практически все время</label>
                    </div>
                </div>
                <div>
                    <span>7. Я легко могу сесть и расслабиться</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_07_01" name="t[4]" value="0">
                        <label for="t[4]">определенно, это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_07_02" name="t[4]" value="1">
                        <label for="t[4]">наверное, это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_07_03" name="t[4]" value="2">
                        <label for="t[4]">лишь изредка это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_07_04" name="t[4]" value="3">
                        <label for="t[4]">совсем не могу</label>
                    </div>
                </div>
                <div>
                    <span>8. Мне кажется, что я стал все делать очень медленно</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_08_01" name="d[4]" value="3">
                        <label for="d[4]">практически все время</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_08_02" name="d[4]" value="2">
                        <label for="d[4]">часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_08_03" name="d[4]" value="1">
                        <label for="d[4]">иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_08_04" name="d[4]" value="0">
                        <label for="d[4]">совсем нет</label>
                    </div>
                </div>
                <div>
                    <span>9. Я испытываю внутренне напряжение или дрожь</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_09_01" name="t[5]" value="0">
                        <label for="t[5]">совсем не испытываю</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_09_02" name="t[5]" value="1">
                        <label for="t[5]">иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_09_03" name="t[5]" value="2">
                        <label for="t[5]">часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_09_04" name="t[5]" value="3">
                        <label for="t[5]">очень часто</label>
                    </div>
                </div>
                <div>
                    <span>10. Я не слежу за своей внешностью</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_2_10_01" name="d[5]" value="3">
                        <label for="d[5]">определенно это так</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_10_02" name="d[5]" value="2">
                        <label for="d[5]">я не уделяю этому столько времени, сколько нужно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_10_03" name="d[5]" value="1">
                        <label for="d[5]">может быть, я стал меньше уделять этому внимания</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_2_10_04" name="d[5]" value="0">
                        <label for="d[5]">я слежу за собой так же, как и раньше</label>
                    </div>
                <div>
                    <span>11. Я не могу усидеть на месте, словно мне постоянно нужно двигаться</span>
                </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_2_11_01" name="t[6]" value="0">
                            <label for="t[6]">определенно, это так</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_11_02" name="t[6]" value="1">
                            <label for="t[6]">наверное, это так</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_11_03" name="t[6]" value="2">
                            <label for="t[6]">лишь в очень малой степени это так</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_11_04" name="t[6]" value="3">
                            <label for="t[6]">совсем не способен</label>
                        </div>
                    </div>
                    <div>
                        <span>12. Я считаю, что мои дела (занятия, увлечения) могут принести мне чувство удовлетворения</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_2_12_01" name="d[6]" value="0">
                            <label for="d[6]">точно так, как и обычно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_12_02" name="d[6]" value="1">
                            <label for="d[6]">да, но не в той степени, как раньше</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_12_03" name="d[6]" value="2">
                            <label for="d[6]">значительно меньше, чем раньше</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_12_04" name="d[6]" value="3">
                            <label for="d[6]">совсем не считаю</label>
                        </div>
                    </div>
                    <div>
                        <span>13. У меня бывает внезапное чувство паники</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_2_13_01" name="t[7]" value="3">
                            <label for="t[7]">действительно, очень часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_13_02" name="t[7]" value="2">
                            <label for="t[7]">довольно часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_13_03" name="t[7]" value="1">
                            <label for="t[7]">не так уж часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_13_04" name="t[7]" value="0">
                            <label for="t[7]">совсем не бывает</label>
                        </div>
                    </div>
                    <div>
                        <span>14. Я могу получить удовольствие от хорошей книги, фильма, радио- или телепрограммы</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_2_14_01" name="d[7]" value="0">
                            <label for="d[7]">часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_14_02" name="d[7]" value="1">
                            <label for="d[7]">иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_14_03" name="d[7]" value="2">
                            <label for="d[7]">редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_2_14_04" name="d[7]" value="3">
                            <label for="d[7]">очень редко</label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="send">
            </form>
		</section>

		<footer>
			
		</footer>	
	</body>
</html>