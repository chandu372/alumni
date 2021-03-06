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
  <title>Events</title>
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



        <div class="card bg-light " style="margin-top: 20px;min-height: 150vh;margin-left: 10%;margin-right: 10%">
        <div class="card-body text-center">
          
           <div class="card bg-light " style="margin-top: 20px;">
        <div class="card-body text-center">
          <h1 style="color: black;font-size: 35px">Events</h1>
        </div>
        </div>
        
        <div class="card bg-light " style="margin-top: 20px;margin-left:10%;margin-right: 10%">
        <div class="card-body text-center">
          <h1 style="color: black;font-size: 20px">Tentative Calendar Plan Of Events</h1>
           <div class="container" style="overflow-x:scroll; margin-top: 20px" >
  <table class="table" style="border-color: white;" >
    <thead class="thead-dark">
      <tr>
        <th>Weeks</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
      </tr>
    <tbody>
      <tr style="color: white; background-color: orange">
        <td>1st weekend</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>VNIT yar 2015</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="color: white; background-color:orange">
        <td>2nd weekend</td>
        <td></td>
        <td>VNIT AA delhi chapter meet</td>
        <td></td>
        <td></td>
        <td>evning with anshu gupta</td>
        <td></td>
        <td>7th Mumbai chapter meet</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="color: white;background-color:orange">
        <td>3rd weekend</td>
        <td></td>
        <td></td>
        <td></td>
        <td>PRATIGYA pune chapter meet</td>
        <td></td>
        <td></td>
        <td> </td>
        <td></td>
        <td>Yearly alumni reunion 2013</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="color: white;background-color:orange">
        <td>4th weekend</td>
        <td>VNIT N.A alumni meet 2017</td>
        <td></td>
        <td></td>
        <td></td>
        <td> 1969 Golden jublee meet</td>
        <td>1994 Silver jublee meet ,yearly annual reunion 2014</td>
        <td> yearly alumni reunion '16</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
    </div>
    </div>
     </div>
       <div class="row">
          <div class="col-md-6">
         <div class="card bg-light" style="margin-top: 40px;">
        <div class="card-body text-center">
        <img src="images/instagram.jpg" style="width: 60%;">
      </div>
      </div>
    </div>
    <div class="col-md-6">

       <div class="card bg-light"  style="margin-top: 40px">
        <div class="card-body text-center">
        <img src="images/eve.jpg" style="width: 100%;">
      </div>
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