<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/helper.php');
	echo 'Welcome to test 1';
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
                    <span>1. Замечаете ли Вы, что проводите в интернете больше времени, чем намеревались?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_01" name="v[1]" value="1">
                        <label for="v[1]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_02" name="v[1]" value="2">
                        <label for="v[1]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_03" name="v[1]" value="3">
                        <label for="v[1]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_04" name="v[1]" value="4">
                        <label for="v[1]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_01_05" name="v[1]" value="5">
                        <label for="v[1]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>2. Пренебрегаете ли вы домашними делами, что бы подольше побродить по сети? </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_01" name="v[2]" value="1">
                        <label for="v[2]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_02" name="v[2]" value="2">
                        <label for="v[2]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_03" name="v[2]" value="3">
                        <label for="v[2]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_04" name="v[2]" value="4">
                        <label for="v[2]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_02_05" name="v[2]" value="5">
                        <label for="v[2]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>3. Предпочитаете пребывание в сети интимному общению с партнером? </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_01" name="v[3]" value="1">
                        <label for="v[3]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_02" name="v[3]" value="2">
                        <label for="v[3]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_03" name="v[3]" value="3">
                        <label for="v[3]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_04" name="v[3]" value="4">
                        <label for="v[3]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_03_05" name="v[3]" value="5">
                        <label for="v[3]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>4. Заводите знакомства с пользователями интернета, находясь в онлайне? </span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_01" name="v[4]" value="1">
                        <label for="v[4]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_02" name="v[4]" value="2">
                        <label for="v[4]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_03" name="v[4]" value="3">
                        <label for="v[4]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_04" name="v[4]" value="4">
                        <label for="v[4]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_04_05" name="v[4]" value="5">
                        <label for="v[4]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>5. Раздражаетесь из-за того, что окружающие интересуются количеством времени, проводимым вами в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_01" name="v[5]" value="1">
                        <label for="v[5]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_02" name="v[5]" value="2">
                        <label for="v[5]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_03" name="v[5]" value="3">
                        <label for="v[5]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_04" name="v[5]" value="4">
                        <label for="v[5]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_05_05" name="v[5]" value="5">
                        <label for="v[5]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>6. Отмечаете, что перестали делать успехи в учебе или работе, так как слишком много времени проводите в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_01" name="v[6]" value="1">
                        <label for="v[6]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_02" name="v[6]" value="2">
                        <label for="v[6]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_03" name="v[6]" value="3">
                        <label for="v[6]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_04" name="v[6]" value="4">
                        <label for="v[6]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_06_05" name="v[6]" value="5">
                        <label for="v[6]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>7. Проверяете электронную почту раньше, чем сделаете что-то другое, более необходимое?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_01" name="v[7]" value="1">
                        <label for="v[7]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_02" name="v[7]" value="2">
                        <label for="v[7]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_03" name="v[7]" value="3">
                        <label for="v[7]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_04" name="v[7]" value="4">
                        <label for="v[7]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_07_05" name="v[7]" value="5">
                        <label for="v[7]">Всегда</label>
                    </div>
                </div>
                <div>
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
                <div>
                    <span>9. Занимаете оборонительную позицию и скрытничаете, когда вас спрашивают, чем вы занимаетесь в сети?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_01" name="v[9]" value="1">
                        <label for="v[9]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_02" name="v[9]" value="2">
                        <label for="v[9]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_03" name="v[9]" value="3">
                        <label for="v[9]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_04" name="v[9]" value="4">
                        <label for="v[9]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_09_05" name="v[9]" value="5">
                        <label for="v[9]">Всегда</label>
                    </div>
                </div>
                <div>
                    <span>10. Блокируете беспокоящие мысли о вашей реальной жизни мыслями об интернете?</span>
                </div>
                <div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_01" name="v[10]" value="1">
                        <label for="v[10]">Никогда или крайне редко</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_02" name="v[10]" value="2">
                        <label for="v[10]">Иногда</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_03" name="v[10]" value="3">
                        <label for="v[10]">Регулярно</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_04" name="v[10]" value="4">
                        <label for="v[10]">Часто</label>
                    </div>
                    <div>
                        <input required="required" type="radio" id="test_1_10_05" name="v[10]" value="5">
                        <label for="v[10]">Всегда</label>
                    </div>
                    <div>
                        <span>11. Обнаруживаете себя предвкушающим очередной выход в Сеть?</span>
                    </div>
                    <div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_01" name="v[11]" value="1">
                            <label for="v[11]">Никогда или крайне редко</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_02" name="v[11]" value="2">
                            <label for="v[11]">Иногда</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_03" name="v[11]" value="3">
                            <label for="v[11]">Регулярно</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_04" name="v[11]" value="4">
                            <label for="v[11]">Часто</label>
                        </div>
                        <div>
                            <input required="required" type="radio" id="test_1_11_05" name="v[11]" value="5">
                            <label for="v[11]">Всегда</label>
                        </div>
                    </div>
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                    <div>
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
                </div>
                <input type="submit" value="send">
            </form>
		</section>

		<footer>
			
		</footer>	
	</body>
</html>