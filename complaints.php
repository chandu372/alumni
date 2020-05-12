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
  <title>Complaints</title>
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



        <div class="card bg-light " style="margin-top: 20px;min-height: 155vh;margin-left: 10%;margin-right: 10%">
        <div class="card-body text-center"   >
        
         <div class="card bg-light " style="margin-top: 20px;">
        <div class="card-body text-center">
        <h1 style="color: black;font-size: 35px">Complaints</h1>
        </div>
        </div>
        
        <p style="color: black;text-align: left;margin-top: 25px">The VNIT Alumni Association (VNITAA) is a welcoming and inclusive organization that invites feedback in order to improve our programs and services for the greater alumni community. When possible, we always look to identify and solve any issues that might arise at the individual program level. Should this not be possible, we have designed a formal complaints procedure aimed at providing a positive resolution in a timely fashion.</p>
        <hr>
        <h5 style="color: blue;margin-top: 20px;margin-left: 20px;text-align: left;">WHO CAN FILE A COMPLAINT</h3>
        
          <ul  style="color: black;text-align: left;">
            <li>An student of the VNIT</li>
            <li>An employee of the VNIT Alumni Association</li>
            <li>A volunteer or member of the VNIT Alumni Association</li>
            <li>The programs, services, and/or offerings of the VNIT Alumni Association</li>
          </ul>
        <hr>
        <h5 style="color: blue;margin-top: 20px;margin-left: 20px;text-align: left;">HOW TO FILE A COMPLAINT</h3>
          <ul  style="color: black;text-align: left;">
            <li>The formal complaints procedure starts with the VNITAA Program Manager/Director directly associated with the program involving the complaint. All complaints should be submitted in filling below form.The VNITAA Program Manager/Director will carry out a full investigation into the circumstances surrounding the complaint.</li>
            <li> Involves a review of the complaint by the Chief Operating Officer (COO) at the VNIT Alumni Association. The Chief Operating Officer will verify that an investigation has been carried out fully and properly. The response provided by the Chief Operating Officer will also inform the complainant of their right to appeal the findings should they not be satisfied with the outcome.Appeals must be submitted in writing to the COO </li>
            <li>Involves a review of the complaint by the Executive Director of the VNIT Alumni Association.The Executive Director will verify that the investigation during Steps One and Two has been carried out fully and properly. Executive Director may deem it appropriate to bring the complaint before the CAA Board of Directors. </li>
          </ul>
          <hr>



         <div class="card bg-light " style="margin-top: 20px;">
        <div class="card-body text-center"   >
       <h2 style="color: grey;">Register Complaint</h2>

          <div style="text-align: left">
          <form action="/action_page.php" class="was-validated">
    <div class="form-group" style="margin-top: 15px" >
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
    <div class="form-group">
      <label for="topic">Topic:</label>
      <input type="topic" class="form-control" id="topic" placeholder="Enter topic" name="topic" required>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
        </div>
        </div>




       
        </div>
        </div>
      


   <div style="background-color: #222;width: 100%;min-height: 20vh;margin-top: 10px">

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