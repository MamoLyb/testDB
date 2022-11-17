<?php 
	require_once 'connection.php';

	///Update
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];

	$name = htmlspecialchars($name);
	$age = htmlspecialchars($age);

	$name = urldecode($name);
	$age = urldecode($age);

	$name = trim($name);
	$age = trim($age);
	
	mysqli_query($connect, "UPDATE `users` SET `name` = '$name', `age` = '$age' WHERE `users`.`id` = $id");

	header('Location:/index.php');
?>