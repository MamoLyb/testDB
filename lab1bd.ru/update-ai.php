<?php 
	require_once 'functions/connection.php';

	$userid = $_GET['id'];
	$acc = mysqli_query($connect, "SELECT * FROM `accinfo` WHERE userid = '$userid'");
	$acc = mysqli_fetch_assoc($acc);
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
					<a href="accinfo.php" class="popup__close">X</a>
					<div class="popup__title">Обновление записи</div>
					<div class="popup__text">Введите данные</div>
					<form action="functions/update-ai.php" method="post">
						<input type="text" value="<?= $acc['userid'] ?>" name="userid">
						<input type="text" value="<?= $acc['charid']?>" name="charid">
						<input type="text" value="<?= $acc['balance']?>" name="balance">
						<input type="text" value="<?= $acc['status']?>" name="status">
						<button type="submit">Обновить</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<style></style>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</html>