<!DOCTYPE html>
<html lang="en">
<head>
  <title>payment</title>
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


<div style="text-align: center;">

<h3 style="color: white ">Online UPI mode</h3>
<br>

<p style="color: white">Scan the QR code using your UPI apps</p>
<img src="images/qr.png" style="max-width: 100%">
<br>
<a href="https://payments.cashfree.com/order/#2f3wziczdehw8okns37l" ><h3 style="margin-top: 40px">Other payment methods</h3></a>
</div>


  <div class="row">
   <div class="col-md-6" style="display: block;text-align: center;margin-top: 50px; ">
    <a href="https://www.facebook.com/VNITAlumni"> <img src="images/fb.png"></a>
    <span style="color: blue">Facebook</span>
    <br>
    <a href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about"> <img src="images/lin.png" style="padding-left: 0px"></a>
    <span style="color: blue">Linkedin</span>
  </div>
  <div class="col-md-6" style="display: inline-block;text-align: center;margin-top: 50px; ">
    <h5 style="color: white; ">Email:<a href="mailto:info@vnitaa.com">info@vnitaa.com</a></h5>
   <h5 style="color: white;">Contact:<a href="tel:9096399077">9096399077</a></h5>
  </div>
  <div class="col-md-12" style="color:white; text-align: center; height: 30px; ">
  Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.
  </div>
</body>
</html>