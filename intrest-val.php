<?php 
session_start();
	$id= $_SESSION['username'];

	include("config.php");
	$intrest= $_POST['intrest'];
	
	$getintrestDet = $con->query("select* from intrest where student_id='$id'");
	if($getintrestDet->num_rows)
	{
			$test1 = $con->query("UPDATE `intrest` SET `intrest`='$intrest' WHERE student_id='$id'") or die($con->error);
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
		$addVal  =$con->query("insert into intrest values('','$id','$intrest')") or die($con->error);
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