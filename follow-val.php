<?php 
session_start();
	$id= $_SESSION['username'];
    $alumni_id=$_GET['id'];
	include("config.php");
	$test = $con->query("select* from follow where student_id='$id' and alumni_id='$alumni_id'") or die($con->error);
	$pagePath  = "prof.php?id=".$alumni_id;
		if($test->num_rows)
		{
			header('location:$pagePath');
			return 0;
		}
		else{
			 	  $test1 = $con->query("INSERT INTO follow(`id`,`student_id`,`alumni_id`)VALUES('','$id','$alumni_id');");
			header('location:$pagePath');


		}
	?>