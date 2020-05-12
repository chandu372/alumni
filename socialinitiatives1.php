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
  <title>social initiatives</title>
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
          <a class= "nav-link mr-sm-2" href="#">chapters</a>
       
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
  <div style="margin-left: 20px">

<h1 style="color: black; padding-left: 0px">Funds</h1>
<br>
<h3 style="color: black;padding-left: 0px">COVID-19 Relief Fund</h3>
  <div style="text-align: center;">
    <img src="images/covid.jpg" style="max-width: 100%" >
  </div>
   <p style="color: black;padding-left: 0px">Dear All,</p>
   <p style="color: black;padding-left: 0px">In this state of a medical emergency where the entire country is panicked & scared, complete lock down is being observed till 14 April, ensuing to which people have reserved themselves to their homes and everyone wants to be safe. But we have again forgotten about those who have lost their families, have become homeless, and are suffering in this hard time due to starvation and financial crisis. </p> 
   <p style="color: black;padding-left: 0px">This lockdown is going to hit harder to a big chuck of our society, the daily wage earners. We at VNITAA are running this fund raising campaign for this weakest section of our society.</p>
    <p style="color:black;padding-left: 0px">Nagpur Municipal Corporation (NMC) and District Administration are working very hard to make necessary food supplies available to all the poor and needy persons. They expect support from our side to contribute generously for food packets to be distributed to around 75,000 families living in large number of slums of Nagpur. Basic things like Rice, Wheat, and dal (lentils) are being provided by the Government. Other supplementary items to be included in the packets would include Potatoes, Onions, Edible Oil, Salt, Spices, etc. The estimated cost for each packet would be around Rs. 750 each. Hence, they are expecting an immediate support for around Rs 5.00 Crores from various charitable organisations and NGOs.
    These food packs will sustain these families for around 4 weeks. Let us all come together for this noble cause and contribute - personally and through your friends, associates, and connected organisations.</p>
    <p style="color: black;padding-left: 0px">Your donation to this fund will support immediate relief and recovery in vulnerable communities during one of the most challenging times we have collectively faced.</p>
    <br>
    <p style="color: black;padding-left: 0px">For offline mode of transfer, please use following account details:</p>
    <p style="color: black;padding-left: 0px">Beneficiary Name: VNIT NAGPUR ALUMNI ASSOCIATION</p>
    <p style="color: black;padding-left: 0px">Bank - State Bank Of India</p>
    <p style="color: black;padding-left: 0px">Branch -VNIT Br., Nagpur</p>
    <p style="color:black;padding-left: 0px">Current A/c # 36284617397</p>
    <p style="color: black;padding-left: 0px">IFS Code- SBIN0006702</p>
    <p style="color: black;padding-left: 0px">Pls do mention in the NEFT Narration:- “Covid-19 / Your Name & Batch Year.”Looking forward to your whole-hearted support, as always. Warm Regards,Shashikant Chaudhary,</p>
   <h3 style="color: black ;text-align: center;">"EVERY RUPEE COUNTS"</h3>
   <div style="text-align: center;">
   <img src="images/rupee.png" style="max-width: 100%">
</div>
   <br>
   <div style="text-align: center;" >
   <a href="payment1.php"><button type="button" class="btn btn-success">Contribute</button></a>
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