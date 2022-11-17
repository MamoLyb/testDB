<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<link rel="shortcut icon" href="img/icons/1.png" type="image/png">
		<title>Accounts</title>
		<!-- Кодировка страницы -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<?php
			require_once 'functions/connection.php';
			$accs = mysqli_query($connect, "SELECT * FROM `accinfo`");
			$accs = mysqli_fetch_all($accs);
	   ?>
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<div id="cool" class="wrap">
			<div class="wrap__tableView">
				<div class="top">
					<div class="wrap__rows">
						<div class="wrap__elems">ID</div>
						<div class="wrap__elems">CHAR ID</div>
						<div class="wrap__elems">BALANCE</div>
						<div class="wrap__elems">STATUS</div>
						<div class="wrap__elems" id="colorfull"></div>
					</div>
				</div>
				<?php
					foreach ($accs as $acc) {
				?>
				<div class="wrap__rows">
					<div class="wrap__elems"><?= $acc[0] ?></div>
					<div class="wrap__elems"><?= $acc[1] ?></div>
					<div class="wrap__elems"><?= $acc[2] ?></div>
					<div class="wrap__elems"><?= $acc[3] ?></div>
					<div class="wrap__elems"><a class="uptudate" href="update-ai.php?id=<?= $acc[0] ?>">Обновить запись</a></div>
				</div>
				<?php	
				}
				?>
			</div>
			<div class="wrap__buttons">
				<div class="wrap__button" id="one"><a href="charinfo.php">Прошлая таблица</a></div>
				<div class="wrap__button" id="two"><a href="#popup1">Добавить строку</a></div>
				<div class="wrap__button" id="five"><a href="#popup3">Удалить строку</a></div>
				<div class="wrap__button" id="four"><a href="index.php">Следующая таблица</a></div>
			</div>
		</div>
		<div class="popup" id="popup1">
			<div class="popup__body">
				<div class="popup__content">
					<a href="#cool" class="popup__close">X</a>
					<div class="popup__title">Добавление записи</div>
					<div class="popup__text">Введите данные</div>
					<form action="functions/create-ai.php" method="post">
						<input type="text" placeholder="UserID" name="userid">
						<input type="text" placeholder="CharID" name="charid">
						<input type="text" placeholder="Balance" name="balance">
						<input type="text" placeholder="Status" name="status">
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
					<form action="functions/delete-ai.php" method="post">
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
	</style>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
</html>