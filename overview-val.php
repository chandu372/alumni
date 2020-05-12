<?php 
session_start();
	$id= $_SESSION['username'];

	include("config.php");
	$mothername= $_POST['mother-name'];
	if(strlen($mothername))
	{
		$test1 = $con->query("UPDATE `student_registered` SET `mother-name`='$mothername' WHERE `email-id`='$id'") or die($con->error);
	}
	$fathername= $_POST['father-name'];
	if(strlen($fathername))
	{
		$test1 = $con->query("UPDATE `student_registered` SET `father-name`='$fathername' WHERE `email-id`='$id'") or die($con->error);
	}
	$gender= $_POST['gender'];
	if(strlen($gender))
	{
		$test1 = $con->query("UPDATE `student_registered` SET `gender`='$gender' WHERE `email-id`='$id'") or die($con->error);
	}
	$branch= $_POST['branch'];
	if(strlen($branch))
	{
         $test1 = $con->query("UPDATE `student_registered` SET `branch`='$branch' WHERE `email-id`='$id'") or die($con->error);
	}
	$year= $_POST['year-of-completion'];
	if(strlen($year))
	{
        $test1 = $con->query("UPDATE `student_registered` SET `year-of-completion`='$year' WHERE `email-id`='$id'") or die($con->error);
	}
	$mobile= $_POST['mobile-no'];
	if(strlen($mobile))
	{
        $test1 = $con->query("UPDATE `student_registered` SET `mobile-no`='$mobile' WHERE `email-id`='$id'") or die($con->error);
	}

echo "1";



?>