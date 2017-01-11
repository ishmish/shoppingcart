<?php
     session_start();
	
	
	if($_GET["logout"]==1) session_destroy();
	
	include("connection.php");

	if($_POST['signup']) {
		if(!$_POST['email']) $error.="</br> please enter a valid email";
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="</br> please enter a valid email";
		
		if(!$_POST['password']) $error.="</br> Please enter a password";
		
		else {
			if(strlen($_POST['password'])<8) $error.="</br> Please enter a password >8 characters long";
	if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="</br> Please include atleast one capital letter in your password";
	} 
	if($_POST['password']!=$_POST['password2']) $error.="</br> Your passwords did not match";
	
	
	if ($error) $error= "There were error(s) in your signup details: ".$error;
	else {
			
		
			$query= "SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result= mysqli_query($link, $query);
			$results= mysqli_num_rows($result);
			if($results) {
				$error= "email address already registered. Would you like to log in?";
			}
			else {
				$query="INSERT INTO `users` (`name`, `lastname`, `email`, `password`, `address`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."','".mysqli_real_escape_string($link, $_POST['lastname'])."','".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."','".mysqli_real_escape_string($link, $_POST['address'])."')";
				mysqli_query($link,$query);
				$success= "Sign up successful,welcome to the LushCandie family";
				$_SESSION['id'] =mysqli_insert_id($link);
				print_r($_SESSION);
			}
	}
	
	}
	
	if($_POST['login']) {
		
			$query= "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."'";
			$result= mysqli_query($link, $query);
			$results= mysqli_num_rows($result);
			if(!$results) {
				$error= "Email not registered, do you want to sign up?";
			} else {
			$query= "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
				
				$result= mysqli_query($link, $query);
				$row=mysqli_fetch_array($result);
				if($row) {
				 $_SESSION['id']=$row['id'];
				$success=$_SESSION['id'];	
					//redirected to logged in page
					header("location:index.php");
					
				} else {
					$error="We could not find a user with that email and password";
				}
			}
	}


if($error) {
		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';		
} 
if($success){
	echo '<div class="alert alert-success">'.addslashes($success).'</div>';
	
}
?>