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
  <title>chapters</title>
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
<body style= "background-color:  #E9EBEE; margin:0 auto">

    
    <nav class="navbar navbar-light bg-light" style="background-color:#1B374C !important">
      <a class="navbar-brand" href="studfeed.php" >
              <img src="images/logo.jpg" alt="logo" style="width:100%;">
      </a>
  <ul class="navbar-nav form-inline" style="display: flex;flex-direction: row">
    
    <li class="nav-item">
      <a class="nav-link" href="socialinitiatives.php">social initiatives</a>
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
   
     <div class="card bg-light" style="height: auto;width: 90%;margin-left: 5%;margin-top: 10px;margin-bottom: 5px;box-shadow:  2px 2px #888888">
      <div class="card-body text-center" >
        <h2 style="color: black;">Chapters</h2>
        <img src="images/head.png" style="width: 100%;margin-top: 20px">

    <div class="row">
        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/nagpur1.jpg" style="width:100%;">
        <a href="#"><h5 style="color: black;margin-top: 10px">Nagpur Chapter</h5></a>
        </div>
        </div>

        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/mumbai.webp" style="width:100%;">
        <a href="#"><h5 style="color: black;margin-top: 10px">Mumbai Chapter</h5></a>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/chennai.jpg" style="width:100%;">
        <a href="#"><h5 style="color: black;margin-top: 10px">Chennai Chapter</h5></a>
        </div>
        </div>
    
        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/delhi.jpg" style="width:100%;">
        <a href="#"><h5 style="color: black;margin-top: 10px">Delhi Chapter</h5></a>
        </div>
        </div>
     </div>
    <div class="row">
        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/bengalore.jpg" style="width:100%;">
        <a href="#"><h5 style="color: black;margin-top: 10px">Bengalore Chapter</h5></a>
        </div>
        </div>

        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/gujarat1.jpg" style="width:100%;height: 270px">
        <a href="#"><h5 style="color: black;margin-top: 10px">Gujarat Chapter</h5></a>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/na.jpg" style="width:100%;">
        <a href="#"><h5 style="color: black;margin-top: 10px">North America Chapter</h5></a>
        </div>
        </div>

        <div class="card bg-light col-md-4" style="min-height: 100px;margin-left: 10%;margin-top: 20px;">
        <div class="card-body text-center" >
        <img src="images/pune.jpg" style="width:100%;margin-top: 15px">
        <a href="#"><h5 style="color: black;margin-top: 15px">Pune Chapter</h5></a>
        </div>
        </div>
    </div>

      </div>
     </div>




  <div style="background-color: #222;width: 100%;height: 25vh;margin-top: 1px">
  <div style="margin-left: 20%;display: inline-block;">
    <h6 style="color: white;">Browse</h6>
    <a href="#" style="color: white;font-size: 14px">By Map</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">Student Coordinators</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">By People</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">FAQ</a>
  </div>

  <div style="margin-left: 20%;display: inline-block;">
    <h6 style="color: white;margin-top: 30px">About us</h6>
    <a href="#" style="color: white;font-size: 14px">About VNITAA</a>
    <br>
    <a href="#" style="color: white;font-size: 14px">Chapters</a>
    <br>
    <a href="https://vnit.ac.in" style="color: white;font-size: 14px">Vnit</a>
    <br>
    <a href="https://vnitalumni.com" style="color: white;font-size: 14px">VNITAA</a>

  </div>

  <div style="margin-left: 20%;display: inline-block;">
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
<div style="background-color: white;width: 100%">
 <img src="images/cr.svg" style="width:35px;height:35px;margin-left: 30%;margin-top: 5px;display: inline-block;">
 <p style="color: black;display: inline-block;margin-left:5px;margin-top: 10px">Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.</p>
</div>
</body>
</html>
</body>
</html>