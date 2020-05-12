<?php
    session_start();
    if(!(isset($_SESSION['stuisloggedin']) && $_SESSION['stuisloggedin']==1))
    {
      header('Location:index.php');
    }
    $userName = $_SESSION['username'];

    include("config.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>sponsorship</title>
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
<body style= "background-color: #E9EBEE; margin:0 auto">

  
  
    <nav class="navbar navbar-light bg-light" style="background-color:#1B374C !important">
      <a class="navbar-brand" href="studfeed.php" >
              <img src="images/logo.jpg" alt="logo" style="width:100%;">
      </a>
  <ul class="navbar-nav form-inline" style="display: flex;flex-direction: row">
    
    <li class="nav-item">
      <a class="nav-link" href="socialinitiatives1.php">social initiatives</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Alumni
      </a>
      <div class="dropdown-menu" style="background-color:#1B374C ">
        <a class="dropdown-item nav-link" href="#">by batch</a>
        <a class="dropdown-item nav-link" href="#">by branch</a>
        <a class="dropdown-item nav-link" href="#">by person</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        career
      </a>
      <div class="dropdown-menu" style="background-color:#1B374C ">
        <a class="dropdown-item nav-link" href="#">jobs</a>
        <a class="dropdown-item nav-link" href="#">internships</a>
        <a class="dropdown-item nav-link" href="#">mentorships</a>
        <a class="dropdown-item nav-link" href="#">mock interviews</a>
        <a class="dropdown-item nav-link" href="#">volunteerships</a>
      </div>
    </li>
  </ul>
<div class="form-inline" style="background-color:#1B374C !important">
          <a class= "nav-link mr-sm-2" href="chapters.php">chapters</a>
      
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
   <div style="padding-left: 15px">
      <h1 style="color: black;padding-top: 10px">Sponsorship</h1>
        <div class="row">
        <div class="card bg-light col-md-8" style="margin-top: 20px;">
          <div class="card-body text-left" >
         <p style="color: black;margin-top: 20px">Thank you dear Alumnus/Alumna for expressing your interest in contributing towards the Alumni Fund for the welfare of Economically Challenged Students of VNIT. We’ve classified contributions in three options – Platinum, Gold and Silver. The benefits of each are as follows:</p>
          </div>
        </div>
        <div class="col-md-4 col-xs-12" style="text-align: center;">
          <img src="images/sponsor.png" style="width:90%;padding-top: 20px">
      </div>
    </div>
    <br>
    <br>
  
    <div>
      <h3 style="color: black;padding-top: 10px">Platinum</h3>
      <div class="row">
   
        <div class="card bg-light col-md-8" style="margin-top: 20px;height: 80%">
                <div class="card-body text-left" style="display:flex;justify-content: center;flex-direction: column;" >
                <ul>
                  <li><p style="color: black">The scholarships granted to the Economically Challenged Students shall be named after the individual or company that you specify.</p></li>
                  <li><p style="color: black">Your name will feature on the Donor’s Wall of Fame under the Platinum Donor’s list.</p></li>
                   <li><p style="color: black">Your name shall feature on the Donor’s Wall of Fame here on the alumni website.</p></li>
                </ul>
                <p style="color: black">The amount you pledge will be eligible for tax incentives section 80 G of Income Tax.</p>
                </div>
        </div>
         <div class="col-md-4 col-xs-12" style="text-align: center;">
          <img src="images/platinum.png" style="height: 80%" >
        </div>
    </div>
  </div>
   





<div >
      <h3 style="color: black;padding-top: 10px">Gold</h3>
   
   <div class="row">
        <div class="card bg-light col-md-8" style="margin-top: 20px;height: 80%">
        <div class="card-body text-left"  style="display:flex;justify-content: center;flex-direction: column;" >
        <ul>
      <li><p style="color: black">The scholarships granted to the Economically Challenged Students shall be named after the individual or company that you specify.</p></li>
      <li><p style="color: black">Your name will feature on the Donor’s Wall of Fame under the Gold Donor’s list.</p></li>
       <li><p style="color: black">Your name shall feature on the Donor’s Wall of Fame here on the alumni website</p></li>
    </ul>
    <p style="color: black">The amount you pledge will be eligible for tax incentives section 80 G of Income Tax.</p>
        </div>
        </div>
      
  <div class="col-md-4 col-xs-12" style="text-align: center;">
    <img src="images/gold.png" style="height: 80%" >
  </div>
</div>
</div>



<div >
      <h3 style="color: black;padding-top: 10px">Silver</h3>
   <div class="row">
        <div class="card bg-light col-md-8" style="margin-top: 20px;height: 90%">
        <div class="card-body text-left" style="display:flex;justify-content: center;flex-direction: column;" >
        <ul>
      <li><p style="color: black">Your name will feature on the Donor’s Wall of Fame under the Silver Donor’s list.</p></li>
      <li><p style="color: black">Your name shall feature on the Donor’s Wall of Fame here on the alumni website.</p></li>
    </ul>
    <p style="color: black">The amount you pledge will be eligible for tax incentives section 80 G of Income Tax.</p>
  
        </div>
        </div>
      
    
     <div class="col-md-4 col-xs-12" style="text-align: center;">
    <img src="images/silver.png" style="height: 80%" >
    </div>
    </div>
 </div>
    
<div style="margin-left: 10%;margin-right: 10%">
      
   
        <div class="card bg-light " >
        <div class="card-body text-left" >
        <p style="color: black">These benefits nonetheless are frivolous as compared to the countless “thanks” that you’ll receive from the students who shall benefit from your contributions. We humbly request you to choose one of the options below and pledge as much as you can contribute to the Alumni Fund. Once you click on any of the options below and pledge that amount, we shall be notified automatically and someone from the Alumni Office shall get in touch with you for further formalities.</p>
        </div>
        </div>
      </div>

   
   <br>
   <br>

</div>
    <div style="background-color: #222;width: 100%;min-height: 20vh;margin-top: 1px">

<div class="row">
  <div class="col-md-4 col-xs-4" style="text-align: center;">
    <h6 style="color: white;">Browse</h6>
    <a href="#" style="color: white;font-size: 14px">By Map</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">Student Coordinators</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">By People</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">FAQ</a>
  </div>

  <div class="col-md-4 col-xs-4" style="text-align: center;">
    <h6 style="color: white;">About us</h6>
    <a href="#" style="color: white;font-size: 14px">About VNITAA</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">Chapters</a>
    <br>
    <a href="https://vnit.ac.in" style="color: white;font-size: 14px">Vnit</a>
    <br>
    <a href="https://vnitalumni.com" style="color: white;font-size: 14px">VNITAA</a>

  </div>

  <div class="col-md-4 col-xs-4" style="text-align: center;">
    <h6 style="color: white">Contact</h6>
    <a href="mailto:info@vnitaa.com" style="color: white;font-size: 14px">Email</a>
    <br>
    <a href="tel:+91-9096399077" style="color: white;font-size: 14px">mobile</a>
    <br>
    <a  href="https://www.facebook.com/VNITAlumni" style="color: white;font-size: 14px">Facebook</a>
    <br>
    <a  href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about" style="color: white;font-size: 14px">Linkedin</a>
  </div>
</div>

</div>
<div style="background-color: white;width: 100%;text-align: center;">
  
    <img src="images/cr.svg" style="width:35px;height:35px;display: inline-block;">
    <p style="color: black;display: inline-block;margin-bottom: 0px">Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.</p>

</div>
</body>
</html>