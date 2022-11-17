<?php 
	require_once 'functions/connection.php';

	$charid = $_GET['id'];
	$charr = mysqli_query($connect, "SELECT * FROM `charinfo` WHERE charid = '$charid'");
	$charr = mysqli_fetch_assoc($charr);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/icons/1.png" type="image/png">
	<title>Update</title>
</head>
	<body>
		<div class="popup" id="nah">
			<div class="popup__body">
				<div class="popup__content">
					<a href="charinfo.php" class="popup__close">X</a>
					<div class="popup__title">Обновление записи</div>
					<div class="popup__text">Введите данные</div>
					<form action="functions/update-ci.php" method="post">
						<input type="hidden" value="<?= $charr['charid'] ?>" name="charid">
						<input type="text" value="<?= $charr['name']?>" name="name">
						<input type="text" value="<?= $charr['race']?>" name="race">
						<input type="text" value="<?= $charr['sex']?>" name="sex">
						<input type="text" value="<?= $charr['class']?>" name="class">
						<input type="text" value="<?= $charr['pantheon']?>" name="pantheon">
						<input type="text" value="<?= $charr['level']?>" name="level">
						<button type="submit">Обновить</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</html>