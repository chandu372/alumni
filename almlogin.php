<?php 
session_start();
if(isset($_SESSION["almisloggedin"]) && $_SESSION["almisloggedin"]==1)
 { 
  header('Location:alumnifeed.php');
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumni login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
    .nav-link{
      color: white !important;
      font-size: 16px;
      padding-right: 10px !important;
    }
    .dropdown-item:hover{
      color: black !important;
    }
    </style>
</head>
<body style= "background-color: black; margin:0 auto">

    <nav class="navbar navbar-light bg-light" style="background-color:#1B374C !important">
      <a class="navbar-brand" >
              <img src="images/logo.jpg" alt="logo" style="width:100%;"> 
      </a>
  <ul class="navbar-nav form-inline" style="display: flex;flex-direction: row">
    <li class="nav-item">
      <a class="nav-link" href="/alumni/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="About-us.php ?>">about us</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        student login
      </a>
      <div class="dropdown-menu" style="background-color:#1B374C ">
        <a class="dropdown-item nav-link" href="studtresgn.php">student registration</a>
        <a class="dropdown-item nav-link" href="stulogin.php">login</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        alumni login
      </a>
      <div class="dropdown-menu" style="background-color:#1B374C ">
        <a class="dropdown-item nav-link" href="resgnform.php">alumni registration</a>
        <a class="dropdown-item nav-link" href="almlogin.php">login</a>
      </div>
    </li>
  </ul>
<div class="form-inline" style="background-color:#1B374C !important">
          <a class= "nav-link mr-sm-2" href="http://vnit.ac.in">vnit</a>
          <a class= "nav-link mr-sm-2" href="http://vnitalumni.com">vnitalumni</a>
      <!-- Dropdown -->
    <span class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        contact
      </a>
      <div class=  "dropdown-menu" style="background-color:#1B374C ">
        <a class="dropdown-item nav-link" href="mailto:info@vnitaa.com">E-mail</a>
        <a class="dropdown-item nav-link" href="tel:+91-9096399077">+91–9096399077 </a>
       
      </div>
    </span>
          
</div>
      
  </nav>

  <div >
    <h3 style="color: green;padding-top: 100px;text-align: center;">Alumni Login Form</h3>
  <form action="alumni-login-val.php" class="was-validated" method="POST">
    <div class="form-group container" >

      <label for="uname" style="color: white">E-mail id:</label>
      <input type="email" class="form-control"  id="uname" placeholder="Enter E-mail id" name="email" required>
      <label for="uname" style="color: white">Password:</label>
      <input type="password" class="form-control"  id="uname" placeholder="Enter Password" name="password" required>


      <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" value="1" required> I agree on giving my credentials.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  </div>

  <div class="row">
   <div class="col-md-6" style="display: block;text-align: center;margin-top: 30px;margin-bottom: 20px ">
    <a href="https://www.facebook.com/VNITAlumni"> <img src="images/fb.png"></a>
    <span style="color: blue">Facebook</span>
    <br>
    <a href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about"> <img src="images/lin.png"></a>
    <span style="color: blue">Linkedin</span>
  </div>
  <div class="col-md-6" style="display: inline-block;text-align: center;margin-top: 30px;margin-bottom: 20px ">
    <h5 style="color: white; ">Email:<a href="mailto:info@vnitaa.com">info@vnitaa.com</a></h5>
   <h5 style="color: white;">Contact:<a href="tel:+91–9096399077">9096399077</a></h5>
  </div>
  <div class="col-md-12" style="color:white; text-align: center; margin-top: 10px ">
  Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.
  </div>
</body>
</html>