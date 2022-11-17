<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<link rel="shortcut icon" href="img/icons/1.png" type="image/png">
		<title>Characters</title>
		<!-- Кодировка страницы -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<?php
			require_once 'functions/connection.php';
			$chars = mysqli_query($connect, "SELECT * FROM `charinfo`");
			$chars = mysqli_fetch_all($chars);
	   ?>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<div id="cool" class="wrap">
			<div class="wrap__tableView">
				<div class="top">
					<div class="wrap__rows">
						<div class="wrap__elems">ID</div>
						<div class="wrap__elems">NAME</div>
						<div class="wrap__elems">RACE</div>
						<div class="wrap__elems">SEX</div>
						<div class="wrap__elems">CLASS</div>
						<div class="wrap__elems">PANTHEON</div>
						<div class="wrap__elems">LVL</div>
						<div class="wrap__elems" id="colorfull"></div>
					</div>
				</div>
				<?php
					foreach ($chars as $char) {
				?>
				<div class="wrap__rows">
					<div class="wrap__elems"><?= $char[0] ?></div>
					<div class="wrap__elems"><?= $char[1] ?></div>
					<div class="wrap__elems"><?= $char[2] ?></div>
					<div class="wrap__elems"><?= $char[3] ?></div>
					<div class="wrap__elems"><?= $char[4] ?></div>
					<div class="wrap__elems"><?= $char[5] ?></div>
					<div class="wrap__elems"><?= $char[6] ?></div>
					<div class="wrap__elems" id="uptodate"><a class="uptudate" href="update-ci.php?id=<?= $char[0] ?>">Обновить запись</a></div>
				</div>
				<?php	
				}
				?>
			</div>
			<div class="wrap__buttons">
				<div class="wrap__button" id="one"><a href="index.php">Прошлая таблица</a></div>
				<div class="wrap__button" id="two"><a href="#popup1">Добавить строку</a></div>
				<div class="wrap__button" id="five"><a href="#popup3">Удалить строку</a></div>
				<div class="wrap__button" id="four"><a href="accinfo.php">Следующая таблица</a></div>
			</div>
		</div>
		<div class="popup" id="popup1">
			<div class="popup__body">
				<div class="popup__content">
					<a href="#cool" class="popup__close">X</a>
					<div class="popup__title">Добавление записи</div>
					<div class="popup__text">Введите данные</div>
					<form action="functions/create-ci.php" method="post">
						<input type="text" placeholder="Name" name="name">
						<input type="text" placeholder="race" name="race">
						<input type="text" placeholder="sex" name="sex">
						<input type="text" placeholder="class" name="class">
						<input type="text" placeholder="pantheon" name="pantheon">
						<input type="text" placeholder="level" name="level">
						<button type="submit">Ввести</button>
					</form>
				</div>
			</div>
		</div>
		<div class="popup" id="popup3">
			<div class="popup__body">
				<div class="popup__content">
					<a href="#cool" class="popup__close">X</a>
					<div class="popup__title">Удаление записи</div>
					<div class="popup__text">Укажите id</div>
					<form action="functions/delete-ci.php" method="post">
						<input type="text" placeholder="ID" name="id">
						<button type="submit">Удалить</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<style>
		.wrap__tableView{
			width: 1000px;
		}
		#colorfull,#uptodate{
			width: 360px;
		}
	</style>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
</html>