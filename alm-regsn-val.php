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
	$degree = $_POST['degree'];
	$_SESSION[''] = $degree;
	$branch = $_POST['branch'];
	$_SESSION['branch'] = $branch;
	$year = $_POST['year'];
	$_SESSION['year'] = $year;
	$empstatus = $_POST['employment-status'];
	$_SESSION['empstatus'] = $empstatus;
	$designation = $_POST['designation'];
	$_SESSION['designation'] = $designation;
	$country = $_POST['country'];
	$_SESSION['country'] = $country;
	
	$state = $_POST['state'];
	$_SESSION['state'] = $state;
	
	$city = $_POST['city'];
	$_SESSION['city'] = $city;
	
	$achievments = $_POST['achievments'];
    $_SESSION['achievments'] = $achievments;
	$presentstatus = $_POST['presentstatus'];
    $_SESSION['presentstatus'] = $presentstatus;
	$university = $_POST['universityname'];
    $_SESSION['universityname'] = $university;
	$place = $_POST['place'];
    $_SESSION['place'] = $place;
	$study = $_POST['study'];
    $_SESSION['study'] = $study;
	$address = $_POST['address'];
    $_SESSION['address'] = $address;
	$mobile = $_POST['mobile'];
	$_SESSION['mobile'] = $mobile;
	$userName = $_POST['email'];
	$_SESSION['email'] = $userName;
	$password = $_POST['password'];
	$_SESSION['password'] = $password;
	$checkBox = $_POST['remember'];

	if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
		$_SESSION["nameerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	
if (!preg_match("/^[a-zA-Z0-9]*$/",$mothername)) {
	$_SESSION["mothernameerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	
	if (!preg_match("/^[a-zA-Z0-9]*$/",$fathername)) {
		$_SESSION["fathernameerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	if ($gender == "NULL" || $gender == "--Select--"){
      header('Location:resgnform.php') ; 
      return 0;
    }
    if ($degree == "NULL" || $degree == "--Select--"){
      header('Location:resgnform.php') ; 
      return 0;
    }
    if ($branch == "NULL" || $branch == "--Select--"){
      header('Location:resgnform.php') ; 
      return 0;
    }
    if ($year == "NULL" || $year == "--Select--"){
      header('Location:resgnform.php') ; 
      return 0;
    }
    if ($empstatus == "NULL" || $empstatus == "--Select--"){
      header('Location:resgnform.php') ; 
      return 0;
    }
    if ($presentstatus == "NULL" || $presentstatus == "--Select--"){
      header('Location:resgnform.php') ; 
      return 0;
    }

	if (!preg_match("/^[a-zA-Z0-9]*$/",$designation)) {
		$_SESSION["designationerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	$country = $_POST['country'];
	if (!preg_match("/^[a-zA-Z0-9]*$/",$country)) {
		$_SESSION["countryerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	
	if (!preg_match("/^[a-zA-Z0-9]*$/",$state)) {
		$_SESSION["stateerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	
	if (!preg_match("/^[a-zA-Z0-9]*$/",$city)) {
		$_SESSION["cityerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	
	if (!preg_match("/^[a-zA-Z0-9]*$/",$place)) {
		$_SESSION["placeerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	if (!preg_match("/^[0-9]*$/",$mobile)) {
		$_SESSION["mobileerr"]=1;
      header('Location:resgnform.php') ; 
     return 0;
    }

	
	if($checkBox == 1)
	{
		if($empstatus != "Unemployed"){
			if(!($designation && $country && $state && $city))
			{

				header('Location:resgnform.php');
				return 0;

			}
				
		}
		if($presentstatus != 'nothing further'){
			if(!($university && $place && $study))
			{
				header('Location:resgnform.php');
				return 0;
			}
		}
		$test2= $con->query("select* from `alumni_registered` where `email`='$userName'");
		
     	if($test2->num_rows)
    	{
 	  		$_SESSION['emailerr']=1;
			
       header('Location:resgnform.php');
 	   return 0;
		}
		$test = $con->query("INSERT INTO `alumni_registered` (`id`, `name`, `mother-name`, `father-name`, `gender`, `degree`, `branch`, `year-of-completion`, `employment-status-type`, `designation`, `country`, `state`, `city`, `acheivements`, `presentstatus`, `university`, `place`, `study`, `address`, `mobile-no`, `email`, `password`) VALUES ('', '$name', '$mothername', '$fathername', '$gender', '$degree', '$branch', '$year', '$empstatus', '$designation', '$country', '$state', '$city', '$achievments', '$presentstatus', '$university', '$place', '$study', '$address', '$mobile', '$userName', '$password');") ;
		$test1 = $con->query("INSERT INTO `alumni_auth` (`id`,`username`, `password`) VALUES ('','$userName', '$password');");
		if($test && $test1)
		{
			 header('Location:almlogin.php');
		}
		else{
			 header('Location:resgnform.php');
		}
	}



 ?>
