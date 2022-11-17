<?php 
	require_once 'connection.php';

	///Create
	$name = $_POST['name'];
	$race = $_POST['race'];
	$sex = $_POST['sex'];
	$class = $_POST['class'];
	$pantheon = $_POST['pantheon'];
	$level = $_POST['level'];

	$name = htmlspecialchars($name);
	$race = htmlspecialchars($race);
	$sex = htmlspecialchars($sex);
	$class = htmlspecialchars($class);
	$pantheon = htmlspecialchars($pantheon);
	$level = htmlspecialchars($level);

	$name = urldecode($name);
	$race = urldecode($race);
	$sex = urldecode($sex);
	$class = urldecode($class);
	$pantheon = urldecode($pantheon);
	$level = urldecode($level);

	$name = trim($name);
	$race = trim($race);
	$sex = trim($sex);
	$class = trim($class);
	$pantheon = trim($pantheon);
	$level = trim($level);
	
	mysqli_query($connect, "INSERT INTO `charinfo` (`charid`,`name`, `race`, `sex`, `class`, `pantheon`, `level`) VALUES (NULL, '$name', '$race', '$sex', '$class', '$pantheon', '$level')");

	header('Location:/charinfo.php');
?>

