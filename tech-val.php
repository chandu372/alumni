<?php
	

include("config.php");
	$tech = $_POST['tech'];
	$projects = $_POST['projects'];
	$checkBox = $_POST['remember'];
	if($checkBox == 1)
	{
		 $test = $con->query("INSERT INTO `tech` (`id`,`tech`,`projects`) VALUES ('','$tech', '$projects');");

		 if($test)
		 {
		 	header('Location:alumnifeed.php');
		 }
		else{
		 	header('Location:alumnintro.php');
		}
	}




?>

