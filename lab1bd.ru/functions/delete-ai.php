<?php 
	require_once 'connection.php';

	///Delete
	$id = $_POST['id'];
	mysqli_query($connect, "DELETE FROM `accinfo` WHERE userid = '$id'");
	header('Location:/accinfo.php');
?>