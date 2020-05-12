<?php 
session_start();
	$id= $_SESSION['username'];

	include("config.php");
	$bio= $_POST['bio'];
	$work= $_POST['work'];
	$studied= $_POST['studied'];
	$studiedat= $_POST['studiedat'];
	$lives= $_POST['lives'];

	$getIntroDet = $con->query("select* from intro where student_id='$id'");
	if($getIntroDet->num_rows)
	{
		if(strlen($bio))
	{
	   $test1 = $con->query("UPDATE `intro` SET `bio`='$bio' WHERE student_id='$id'") or die($con->error);
	}
	if(strlen($work))
	{
	   $test1 = $con->query("UPDATE `intro` SET `work`='$work' WHERE student_id='$id'") or die($con->error);
	}
	if(strlen($studied))
	{
	$test1 = $con->query("UPDATE `intro` SET `studied`='$studied' WHERE student_id='$id'") or die($con->error);
	}
	if(strlen($studiedat))
	{
	   $test1 = $con->query("UPDATE `intro` SET `studiedat`='$studiedat' WHERE student_id='$id'") or die($con->error);
	}
	if(strlen($lives))
	{
	$test1 = $con->query("UPDATE `intro` SET `lives`='$lives' WHERE student_id='$id'") or die($con->error);
	}
			
		   	if($test1)
		 	{
		 	  echo "1";
			}
		 	else{
				echo "2";
		 	}
		 	return 0;
	}
	else
	{
		
		$addVal  =$con->query("insert into intro values('','$id','$bio','$work','$studied','$studiedat','$lives')") or die($con->error);
		if($addVal)
		{
		 	  echo "1";
		}
		else{
			echo "2";
		}
		return 0;
	}
   
   



?>