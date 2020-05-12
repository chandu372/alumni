<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student registration</title>
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
      <a class="nav-link" href="About-us.php">about us</a>
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

<h3  style="color: green;padding-top: 50px;text-align: center;">Student Registration Form</h3>

  <form action="stud-regsn-val.php" class="was-validated" method="POST">
    <div class="form-group container" >
      <label for="uname" style="padding-top: 30px;color: white">Name:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Name" name="name" required <?php if(isset($_SESSION['name'])){
        echo "Value=$_SESSION[name]";
      } ?> >
       <?php  
      
       if(isset($_SESSION["nameerr"]) && $_SESSION["nameerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid name</span>";

       }
       ?>
       <br>
      
      <label for="uname" style="color: white" >Mother name:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Mother Name" name="mothername" required <?php if(isset($_SESSION['mothername'])){
        echo "Value=$_SESSION[mothername]";
      } ?> >
      <?php  
      
       if(isset($_SESSION["mothernameerr"]) && $_SESSION["mothernameerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid name</span>";

       }
       ?>
       <br>

      <label for="uname" style="color: white">Father name:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Father Name" name="fathername" required <?php if(isset($_SESSION['fathername'])){
        echo "Value=$_SESSION[fathername]";
      } ?> >
      <?php  
      
       if(isset($_SESSION["fathernameerr"]) && $_SESSION["fathernameerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid name</span>";

       }
       ?>
<br>

      <label for="gender" style="color: white">Gender:</label>
      <br>
      <select name="gender" id="gender" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Transgender">Transgender</option>
      </select>
      <br>
      <label for="branch" style="color: white">Branch:</label>
       <br>
       <select name="branch" id="branch" onchange="SelectBranch();" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="cse">cse</option>
                              <option value="ece">ece</option>
                              <option value="eee">eee</option>
                              <option value="mech">mech</option>
                              <option value="meta">meta</option>
                              <option value="civil">civil</option>
                              <option value="chem">chem</option>
                              <option value="min">min</option>
                              <option value="Appliedchem">Applied Chemistry</option>
                              <option value="Appliedmath">Applied Mathematics</option>
                              <option value="Appliedmech">Applied Mechanics</option>
                              <option value="Applied Physics">Applied Physics</option>
                              <option value="Applied Statistics">Applied Statistics</option>
                              <option value="Applied and Environmental Microbiology">Applied and Environmental Microbiology</option>
                              <option value="Biomechatronics">Biomechatronics</option>
                              <option value="Biomedical Engineering">Biomedical Engineering</option>
                              <option value="Computational Physics">Computational Physics</option>
                              <option value="Geoscience and Technology">Geoscience and Technology</option>
                              <option value="Geobiology">Geobiology</option>
                              <option value="Humanities and Social Sciences">Humanities and Social Sciences</option>
                              <option value="Hydrologic Engineering">Hydrologic Engineering</option>
                              <option value="Industrial and Manufacturing Engineering">Industrial and Manufacturing Engineering</option>
                              <option value="Urban Design & Planning">Urban Design & Planning</option>


       </select>
       <br>
       <label for="year" style="color: white">Year of Completion:</label>
       <br>
       <select name="year" id="year" onchange="SelectBranch();" class="inputTxt" required>
            <option >--Select--</option>
            <option value="2018 - 2019">2018 - 2019</option> 
                 <option value="2019 - 2020">2019 - 2020</option>
            <option value="2020 - 2021">2020 - 2021</option>
            <option value="2021 - 2022">2021 - 2022</option>
            <option value="2022 - 2023">2022 - 2023</option>
       </select>
       <br>
       <br>
       <h5 style="color: white">Residential details</h5>
      <label for="uname" style="color: white">Address:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Address" name="address" required <?php if(isset($_SESSION['address'])){
        echo "Value=$_SESSION[address]";
      } ?> >
      <label for="uname" style="color: white">Mobile No:</label>
       <br>
      <input type="tel" class="form-control"  id="uname" placeholder="Enter Mobile no" name="mobile" required <?php if(isset($_SESSION['mobile'])){
        echo "Value=$_SESSION[mobile]";
      } ?> >
      <?php  
      
       if(isset($_SESSION["mobileerr"]) && $_SESSION["mobileerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid mobile no</span>";

       }
       ?>
       <br>

      <label for="uname" style="color: white">E-mail id:</label>
       <br>
      <input type="email" class="form-control"  id="uname" placeholder="Enter E-mail" name="email" required <?php if(isset($_SESSION['email'])){
        echo "Value=$_SESSION[email]";
      } ?> >

      <?php 
      if(isset($_SESSION["emailerr"]) && $_SESSION["emailerr"]==1)
       {
        echo "<span style=\"color:white\">enter new email id</span>";

       }
       ?>

       <br>


      <label for="uname" style="color: white">Password:</label>
      <input type="password" class="form-control"  id="uname" placeholder="Enter Password" name="password" required >
      <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required value="1"> I agree on giving my credentials.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>



  <div class="row">
   <div class="col-md-6" style="display: block;text-align: center;margin-top: 50px; ">
    <a href="https://www.facebook.com/VNITAlumni"> <img src="images/fb.png"></a>
    <span style="color: blue">Facebook</span>
    <br>
    <a href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about"> <img src="images/lin.png"></a>
    <span style="color: blue">Linkedin</span>
  </div>
  <div class="col-md-6" style="display: inline-block;text-align: center;margin-top: 50px; ">
    <h5 style="color: white; ">Email:<a href="mailto:info@vnitaa.com">info@vnitaa.com</a></h5>
   <h5 style="color: white;">Contact:<a href="tel:+91–9096399077">9096399077</a></h5>
  </div>
  <div class="col-md-12" style="color: white; text-align: center; margin-top: 10px ">
  Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.
  </div>
  <?php
    session_destroy();
    ?>
</body>
</html>
