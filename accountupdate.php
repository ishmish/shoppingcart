<?php
	SESSION_START();
	include("connection.php");
		$query="UPDATE users SET name='".mysqli_real_escape_string($link, $_POST['name'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
		$result=mysqli_query($link,$query);


		$query="UPDATE users SET address='".mysqli_real_escape_string($link, $_POST['address'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
		$result=mysqli_query($link,$query);
	
?>