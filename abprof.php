<?php
    session_start();
    if(!(isset($_SESSION['stuisloggedin']) && $_SESSION['stuisloggedin']==1))
    {
      header('Location:index.php');
    }
    $userName = $_GET['id'];

    include("config.php");
    $rows = $con->query("select* from student_registered where `email-id`='$userName'") or die($con->error);
    if($rows->num_rows)
    {
      $student = $rows->fetch_assoc();
    
    }
    else
    {
      echo "<p>Student details not found</p>";
    }
    $rows1 = $con->query("select* from intrest where `student_id`='$userName'") or die($con->error);
    if($rows1->num_rows)
    {
      $stu = $rows1->fetch_assoc();
    
    }
   




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
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



        <div class="card bg-light " style="margin-top: 20px;min-height: 125vh;margin-left: 10%;margin-right: 10%">
        <div class="card-body text-center" style="background-color: #E6E6FA"  >

         <div class="card bg-light " style="margin-top: 20px;">
        <div class="card-body text-center" style="background-image: url(images/vnit1.jpg);background-size: cover;height: 500px">

          <div class="card bg-light " style="margin-left: 35%;margin-right: 35%">
           <div class="card-body text-center" style="background-size: cover;background-image: url(images/chandu.jpg);width:100%;height: 400px;border-radius: 5px">
           </div>
          </div>

          
             <div class="row" style="padding-top: 25px">
               <div class="col-md-3" style="text-align: center;background-color: #E9EBEE">

                <h5 style="color: blue;padding: 2px"><?php echo ucfirst($student['name']) ?></h5>
               </div>
               <div class="col-md-2" style="text-align: center;background-color:blue">
                 <a href="prof.php?id=<?php echo $_GET['id'] ?>"> <button type="button" class="btn btn-link" style=" color: white" >Timeline</button></a>
               </div>
               
                <div class="col-md-2" style="text-align: center;background-color:#E9EBEE">
                 <a href="abprof.php?id=<?php echo $_GET['id'] ?>"> <button type="button" class="btn btn-link" style=" color: black" >About</button></a>
               </div>
               <div class="col-md-3" style="text-align: center;background-color: blue">
                 <a href="#"> <button type="button" class="btn btn-link" style=" color: white" >Following</button></a>
               </div>
               <div class="col-md-2" style="text-align: center;background-color:#E9EBEE">
                <a href="#"> <button type="button" class="btn btn-link" style=" color: black" >Photos</button></a>
               </div>
               
             </div>

           </div>
         </div>
       
            <div class="card bg-light col-md-12 " style="margin-top: 30px;height: auto">
              <div class="row">
            <div class="card-body col-md-6 text-left" style="padding-left: 30px;border-right: 1px solid #333"> 
              <h3 style="color: black;text-align: center;">Overview</h3>
              <div class="row">
              <div class=" col-md-6 " style="margin-top: 30px;">
              
               
                <h6  style="color: black">Mother name: <?php echo ucfirst($student['mother-name']) ?></h6>
                
                 <h6  style="color: black">Father name: <?php echo ucfirst($student['father-name']) ?></h6>
                 
                  <h6  style="color: black">Gender: <?php echo ucfirst($student['gender']) ?></h6>
                  
                   <h6 style="color: black">Branch: <?php echo ucfirst($student['branch']) ?></h6>
                 </div>
                 <div class=" col-md-6 " style="margin-top: 30px;">
                   
                    <h6  style="color: black">Year Of Completion: <?php echo ucfirst($student['year-of-completion']) ?></h6>
                    
                    
                     
                      <h6  style="color: black">Emailid: <?php echo ucfirst($student['email-id']) ?></h6>
                      
                       <h6  style="color: black">Mobile number: <?php echo ucfirst($student['mobile-no']) ?></h6>
                     </div>
                   </div>
                    
                  
                    </div>
                    <div class="card-body col-md-6 text-left" style="padding-left: 30px;"> 
                      <div class="row">
                        <img src="images/intrest.svg" style="height: 25px;width: 25px;margin-left: 200px">
                        &nbsp;
                        &nbsp;
                        <h5 style="color: black">My Intrests</h5>
                      </div>
                       <p style="color: black;text-align: center;">
                        <?php 
                           if(isset($intrest['intrest']))
                           {

                            ?>
                               <span><?php echo ucfirst($intrest['intrest']) ?></span>
                            <?php
                           }
                           else{
                           echo ("NA");
                         }
                        ?>
                      </p>
                       
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