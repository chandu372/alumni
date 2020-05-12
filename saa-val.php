<?php 
session_start();
	$id= $_SESSION['username'];

	include("config.php");
	$test = $con->query("select* from saareg where student_id='$id'") or die($con->error);
		if($test->num_rows)
		{
			// give 
			header('location:saa.php');
			return 0;
		}
		else{
			 	  $test1 = $con->query("INSERT INTO saareg(`id`,`student_id`)VALUES('','$id');");
			header('location:saa.php');


		}
	?>