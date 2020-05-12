<?php 
session_start();
	$id= $_SESSION['username'];

	include("config.php");
	$description= $_POST['description'];
	
	$getpostDet = $con->query("select* from post where student_id='$id'");
	
		$addVal  =$con->query("insert into post values('','$id','$description')") or die($con->error);
		if($addVal)
		{
		 	  echo "1";
		}
		else{
			echo "2";
		}
		return 0;
	
   
   



?>