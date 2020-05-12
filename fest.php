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
  <title>Fests</title>
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



        <div class="card bg-light " style="margin-top: 20px;min-height: 153vh;margin-left: 10%;margin-right: 10%">
        <div class="card-body text-center">
        
        <div class="card bg-light " style="margin-top: 20px;margin-left: 10%;margin-right: 10%">
        <div class="card-body text-center">
        <img src="images/Fests.png" style="width: 100%">
        </div>
        </div>

        <div class="row">

        <div class=" col-md-4 " style="margin-top: 20px;text-align: center;">
          <div class="card bg-light" style="padding: 2px">
            <div class="card-body text-center">
            <img src="images/axis.jpg" style="width: 100%">
             <p style="color: black;text-align: left;margin-top: 25px">AXIS is the annual technical festival of VNIT, consisting of a gamut of events, guest lectures, workshops and exhibitions that provide a myriad of opportunities for students to enlighten their bright inquisitive minds. Starting out in the year 2001, AXIS has transformed into Central India’s largest technical festival and is now counted to be amongst the top in the nation. It has since, been strong on its pillars of innovation, creativity and team work.  We aim to provide a platform to the young engineers to convert the theoretical knowledge to practical innovations.</p>
             <h6 style="color: black;margin-top: 10px">Contact:</h6>
             <a href="mailto:axiswebdev@protonmail.com">axiswebdev@protonmail.com</a>

            </div>
            </div>
        </div>
           <div class="col-md-4" style="padding: 5px">
        <div class="card bg-light" style="margin-top: 20px;text-align: center;">
        <div class="card-body text-center">
        <img src="images/aarohi.jpg" style="width: 100%">
         <p style="color: black;text-align: left;margin-top: 25px">Aarohi is the annual cultural festival (Cultfest) of Visvesvaraya National Institute of Technology, Nagpur, India. It is the most anticipated youth event of the year in Central India. It is a three-day long event organized every year, usually in October. It was started by the pioneer batch of 1989 in VNIT, which was formally then known as the Visvesvaraya Regional College of Engineering.</p>
         <h6 style="color: black;margin-top: 10px">Contact:</h6>
         <a href="mailto:shounak.zulkanthiwar@aarohiworld.org">shounak.zulkanthiwar@aarohiworld.org</a>

        </div>
        </div>
       </div>
        <div class="col-md-4" style="padding:10px">
         <div class="card bg-light  " style="margin-top: 20px;text-align: center;">
        <div class="card-body text-center">
        <img src="images/ecell.jpg" style="width: 100%">
         <p style="color: black;text-align: left;margin-top: 25px">Consortium, the Annual Entrepreneurship Summit of VNIT Nagpur comprises of invigorating events like Startup Conclave, Swades and many more. The summit aims at fueling entrepreneurial attitude amongst students through healthy competition and exciting challenges.</p>

         <h6 style="color: black;margin-top: 10px">Contact:</h6>
         <a href="mailto:kaustubh.rajimwale@gmail.com">kaustubh.rajimwale@gmail.com</a>
           </div>
        </div>
        </div>
        </div>

         <h4 style="color: grey;margin-top: 30px">To Associate with Fest Contact to Given mail</h4>

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