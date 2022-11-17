<?php 
	require_once 'connection.php';

	///Delete
	$id = $_POST['id'];
	mysqli_query($connect, "DELETE FROM `charinfo` WHERE charid = '$id'");
	header('Location:/charinfo.php');
?>