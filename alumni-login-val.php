<?php
	session_start();
	include("config.php");
	$userName = $_POST['email'];
	$password = $_POST['password'];
	$checkBox = $_POST['remember'];
	if($checkBox == 1)
	{
		 $test = $con->query("select* from alumni_auth where username='$userName' and password='$password'");

		 if($test->num_rows)
		 {
		 	$_SESSION["almisloggedin"]=1;
		 	 header('Location:alumnifeed.php');
		 }
		else{
		 	header('Location:almlogin.php');
		}
	}



?>
