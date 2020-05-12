<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumni-Student</title>
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
<div class="row">

    <div id="demo" class="carousel slide col-md-8 col-xs-12" data-ride="carousel" style="text-align:center">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner" >
        
        <div class="carousel-item active">
          <img src="images/maingate.jpeg" alt="maingate" style="width:100%;height:auto;max-height: 100vh" >
        </div>
        <div class="carousel-item">
          <img src="images/roc.jpeg" alt="rocket" style="width:100%;height:auto;max-height: 100vh" >
        </div>
       
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <div class=" container col-md-4" style=" display: flex;align-content: center;justify-content: center;flex-direction: column;">
     <a href="sw.php">
      <img src="images/sw.png" style="max-width: 100%">
    </a>
      <br>
      <p style=" color:white">VNIT VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY (VNITAA) wholeheartedly appreciates all the support and assistance that we have received from all our alumni. We feel proud to share that the network we started with few chapters, has now grown enormously across the globe.We hope you will continuing with your generous support towards the society and encourage your fellow alumni too.
      </p>
     <a href="socialinitiatives.php"><button type="button" class="btn  btn-primary btn-block">Social initiatives</button></a>
     <a href="Explore-on-map.php"> <button type="button" class="btn btn-success btn-block" style="margin-bottom: 10px;margin-top: 10px">Explore on Map</button></a>
       <a href="alumnimagzine.php"><button type="button" class="btn btn-primary btn-block"style="margin-bottom: 10px">Alumni magzine</button></a>
      <a href="sponsors.php"><button type="button" class="btn btn-success btn-block" style="margin-bottom: 10px">Sponsors</button></a>
      <a href="alumni event calendar.php"><button type="button" class="btn btn-primary btn-block" style="margin-bottom: 10px">Alumni Event calendar</button></a>
      <a href="faq.php"><button type="button" class="btn btn-success btn-block">FAQ</button></a>
    </div>
  </div>
<div class="container" style="color: white;margin-left: 0px;margin-right: 0px;padding-left: 0px">
  <h1 style="color: white">About The Alumni Association</h1>
  <p style="color: white">Welcome to the Alumni Association of your college. This is an initiative of Directorate of Education, VNIT to reconnect the former students of VNIT college with their college. Your story can make your teachers proud of you and inspire the current students of your college. You will get to meet with your batch mates, new students and faculties, Plan, organise and attend the events and much more.
  <br>
  <br>
   Come, be the partner in transforming your college for our next generation.....
  </p>
</div>
<div class="clearfix">
 </div>
<div class="row">
 <div class=" col-md-8" style="color: white; ">
  <h1 style="color: white">Latest News & Events</h1>

  <div style="border: 1px solid brown ; text-align: center;" "display: block;"><a style="color: white"; href="https://www.thehitavada.com/Encyc/2020/1/20/Take-help-of-alumni-to-become-world-class-institute-Gadkari-to-VNIT.html">VNIT Diamond jublee</a></div>
  <br>
  <div style="border: 1px solid brown;text-align: center;" "display: block;"><a style="color: white"; href="https://timesofindia.indiatimes.com/city/nagpur/alumni-changing-vnits-face-5-projects-to-be-unveiled-on-sunday/articleshow/73309717.cms">VNIT Alumni changing VNIT's Face</a></div>
  <br>
  <div style="border: 1px solid brown;text-align: center;" "display: block;"><a style="color: white"; href="https://www.vnitalumni.com/events/event/66914.dz">1994 Silver jublee Alumni meet</a></div>
  <br>
  <br>
  <div style="display: block;margin-top: 30px;text-align: center;">
    <a href="https://www.facebook.com/VNITAlumni"> <img src="images/fb.png"></a>
    <span style="color: blue">Facebook</span>
    <a href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about"> <img src="images/lin.png"></a>
    <span style="color: blue">Linkedin</span>
  </div>
  </div>

<div class=" col-md-4" style="padding-left: 0px;text-align: center;">
    <div style="padding-left: 0px;padding-right: 0px">
    <a href="gallery.php"><h4 style="color: green;text-align:center;margin-top: 15px">Gallery</h4></a>
  </div>
    <a href="gallery.php"><img src="images/admn.png" style="max-width:100%;padding-left: 0px;padding-top: 10px"></a>
   </div>
 </div>
</div>
<br>
<br>
<div class="col-xs-12 " style="padding-bottom: 20px">
   <h1 style="color: white"> Meet Our Alumni</h1>
   <div class="col-xs-12 row">
     <div class="col-xs-12 col-md-8 " >
        <div class="col-xs-12 row">
     
        <div class="col-xs-6 col-md-3"><img src="images/download1.png"  style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
        <div class="col-xs-6 col-md-3"><img src="images/download2.jpg"  style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
        <div class="col-xs-6 col-md-3"><img src="images/download3.jpg"  style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
        <div class="col-xs-6 col-md-3"><img src="images/download4.jpg"  style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
      
        <div class="col-xs-6 col-md-3"><img src="images/download9.jpg"  style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
      
      
       <div class="col-xs-6 col-md-3"><img src="images/download5.jpg"   style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
       <div class="col-xs-6 col-md-3"><img src="images/download6.jpg" style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
       <div class="col-xs-6 col-md-3"><img src="images/download7.jpg"   style="border-radius: 50%; width: 150px; height: 150px;padding: 10px"></div>
     </div>
      
      
     </div>
     <div class="col-xs-12 col-md-4" style="text-align: center;">
       <h5 style="color: white;padding-top: 150px;padding-left: 0px ">Email:<a href="mailto:info@vnitaa.com">info@vnitaa.com</a></h5>
       <h5 style="color: white;padding-left: 0px "><br>Contact:<a href="tel:+91–9096399077">9096399077</a></h5>
     </div>
   </div>
</div>
<div style="background-color: #E9E9E9;color: white; text-align: center; height: 0px; ">
  Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.
  </div>
</body>
</html>
