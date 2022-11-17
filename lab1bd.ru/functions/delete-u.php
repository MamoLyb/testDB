<?php 
	require_once 'connection.php';

	///Delete
	$id = $_POST['id'];
	mysqli_query($connect, "DELETE FROM `users` WHERE id = '$id'");
	header('Location:/index.php');
?>