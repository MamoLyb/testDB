<?php 
	require_once 'connection.php';

	///Update
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
	
	mysqli_query($connect, "UPDATE `accinfo` SET `userid` = '$userid',`charid` = '$charid', `balance` = '$balance', `status` = '$status' WHERE `accinfo`.`userid` = $userid");

	header('Location:/accinfo.php');
?>