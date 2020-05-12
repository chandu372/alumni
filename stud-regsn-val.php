<?php 
session_start();


	include("config.php");
	$name= $_POST['name'];
	$_SESSION['name'] = $name;
	$mothername = $_POST['mothername'];
	$_SESSION['mothername'] = $mothername;

	$fathername= $_POST['fathername'];
	$_SESSION['fathername'] = $fathername;
	$gender = $_POST['gender'];
	$_SESSION['gender'] = $gender;
	$branch = $_POST['branch'];
	$_SESSION['branch'] = $branch;
	$year = $_POST['year'];
	$_SESSION['year'] = $year;
	$address = $_POST['address'];
	$_SESSION['address'] = $address;
	$mobile = $_POST['mobile'];
	$_SESSION['mobile'] = $mobile;
	$userName = $_POST['email'];
	$_SESSION['email'] = $userName;
	$password = $_POST['password'];
	$_SESSION['password'] = $password;
	$checkBox = $_POST['remember'];
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
		
		$_SESSION["nameerr"]=1;
      header('Location:studtresgn.php')
      ; 
     return 0;
    }
	
	
	if (!preg_match("/^[a-zA-Z0-9]*$/",$mothername)) {
		$_SESSION["mothernameerr"]=1;
      header('Location:studtresgn.php') ; 
     return 0;
    }

	
	if (!preg_match("/^[a-zA-Z0-9]*$/",$fathername)) {
		$_SESSION["fathernameerr"]=1;
      header('Location:studtresgn.php') ; 
     return 0;
    }

	
	if (!preg_match("/^[0-9]*$/",$mobile)) {
		$_SESSION["mobileerr"]=1;
      	header('Location:studtresgn.php') ; 
     	return 0;
    }
if ($gender == "NULL" || $gender == "--Select--"){
      header('Location:studtresgn.php') ; 
      return 0;
    }
    if ($branch == "NULL" || $branch == "--Select--"){
      header('Location:studtresgn.php') ; 
      return 0;
    }
    if ($year == "NULL" || $year == "--Select--"){
      header('Location:studtresgn.php') ; 
      return 0;
    }
     $test2= $con->query("select* from `student_registered` where `email-id`='$userName'");
		
     if($test2->num_rows)
    {
 	  $_SESSION['emailerr']=1;
			
       header('Location:studtresgn.php');
 	   return 0;
    }
   if($checkBox == 1)
   {
 	 $test = $con->query("INSERT INTO `student_registered` (`id`, `name`, `mother-name`, `father-name`, `gender`, `branch`, `year-of-completion`, `address`, `mobile-no`, `email-id`, `password`) VALUES ('', '$name', '$mothername', '$fathername', '$gender', '$branch', '$year', '$address', '$mobile', '$userName', '$password');");
 	  $test1 = $con->query("INSERT INTO student_auth(`id`,`username`, `password`)VALUES('','$userName','$password');");
 	if($test && $test1)
 	{
 		header('Location:stulogin.php');
	    }
 	else{
		header('Location:studtresgn.php');
 	}
   }



?>
