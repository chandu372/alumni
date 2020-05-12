<?php

	session_start();
	include("config.php");
	$userName = $_POST['e-mail'];
	$password = $_POST['password'];
	$checkBox = $_POST['remember'];
	if($checkBox == 1)
	{
		$test = $con->query("select* from student_auth where username='$userName' and password='$password'") or die($con->error);
		if($test->num_rows)
		{
			$_SESSION["stuisloggedin"]=1;
			$_SESSION['username'] = $userName;
			header('Location:studfeed.php');
		}
		else{
			header('Location:stulogin.php');
		}
	}



?>



