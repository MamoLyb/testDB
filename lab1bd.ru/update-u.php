<?php 
	require_once 'functions/connection.php';

	$id = $_GET['id'];
	$user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");
	$user = mysqli_fetch_assoc($user);
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
					<a href="index.php" class="popup__close">X</a>
					<div class="popup__title">Обновление записи</div>
					<div class="popup__text">Введите данные</div>
					<form action="functions/update-u.php" method="post">
						<input type="hidden" value="<?= $user['id'] ?>" name="id">
						<input type="text" value="<?= $user['name']?>" name="name">
						<input type="text" value="<?= $user['age']?>" name="age">
						<button type="submit">Обновить</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</html>