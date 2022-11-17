<?php 
	require_once 'connection.php';

	///Create
	$name = $_POST['name'];
	$age = $_POST['age'];

	$name = htmlspecialchars($name);
	$age = htmlspecialchars($age);

	$name = urldecode($name);
	$age = urldecode($age);

	$name = trim($name);
	$age = trim($age);
	
	mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `age`) VALUES (NULL, '$name', '$age')");

	header('Location:/index.php');
?>