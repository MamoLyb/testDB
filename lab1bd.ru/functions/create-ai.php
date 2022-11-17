<?php 
	require_once 'connection.php';

	///Create
	$userid = $_POST['userid'];
	$charid = $_POST['charid'];
	$balance = $_POST['balance'];
	$status = $_POST['status'];

	$userid = htmlspecialchars($userid);
	$charid = htmlspecialchars($charid);
	$balance = htmlspecialchars($balance);
	$status = htmlspecialchars($status);

	$userid = urldecode($userid);
	$charid = urldecode($charid);
	$balance = urldecode($balance);
	$status = urldecode($status);

	$userid = trim($userid);
	$charid = trim($charid);
	$balance = trim($balance);
	$status = trim($status);
	
	mysqli_query($connect, "INSERT INTO `accinfo` (`userid`, `charid`, `balance`, `status`) VALUES ('$userid', '$charid', '$balance', '$status')");

	header('Location:/accinfo.php');
?>

