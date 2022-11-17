<?php 
	require_once 'connection.php';

	///Update
	$pantheon = $_POST['pantheon'];
	$charid = $_POST['charid'];
	$class = $_POST['class'];
	$level = $_POST['level'];
	$name = $_POST['name'];
	$race = $_POST['race'];
	$sex = $_POST['sex'];
	
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
	
	mysqli_query($connect, "UPDATE `charinfo` SET `name` = '$name', `race` = '$race', `sex` = '$sex', `class` = '$class', `pantheon` = '$pantheon', `level` = '$level' WHERE `charinfo`.`charid` = $charid");

	header('Location:/charinfo.php');
?>