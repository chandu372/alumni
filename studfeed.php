<?php
    session_start();
    if(!(isset($_SESSION['stuisloggedin']) && $_SESSION['stuisloggedin']==1))
    {
      header('Location:index.php');
    }
    $userName = $_SESSION['username'];

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
    ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Student feed</title>
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
   
    div.mani{
      margin-top: 25px; padding-left: 30px;
    }
    div.man{
          height: 40px;width: 250px;margin-left: 25%;
    }
    div.man1{
      max-width: 400px;margin-left: 10%;
    }
    div.man2{
      max-width: 400px;margin-left: 10%;   
    }
    p.man{
      padding-left: 30%;
    }
     p.man1{
      padding-left: 30%;
    }
     p.man2{
      padding-left: 30%;
    }
     p.man3{
      padding-left: 30%;
    }
     p.man4{
      padding-left: 30%;
    }
    form.man1{
      padding-left: 30%;
    }
    @media only screen and (max-width: 600px) {
  div.man {
    height: 40px;width: 250px; margin-left: 12%;
   }
   p.man{
      padding-left: 13%;
    }
    form.man1{
      padding-left: 13%;
      width: 80%;
    }
     p.man1{
      padding-left: 13%;
    }
     p.man2{
      padding-left: 13%;
    }
     p.man3{
      padding-left: 13%;
    }
     p.man4{
      padding-left: 13%;
    }
    div.man1{
      max-width: 400px;margin-left: 0%;
    }
     div.man2{
      max-width: 400px;margin-left: 0%;   
    }
    div.mani{
      margin-top: 25px; padding-left: 60px
    }


}
  </style>
</head>
<body style= "background-color: #E9EBEE ; margin:0 auto">

    <nav class="navbar navbar-light bg-light" style="background-color:#1B374C !important">
      <a class="navbar-brand" href="studfeed.php" >
              <img src="images/logo.jpg" alt="logo" style="width:100%;">
      </a>
  <ul class="navbar-nav form-inline" style="display: flex;flex-direction: row">
    
    <li class="nav-item">
      <a class="nav-link" href="socialinitiatives1.php">Social initiatives</a>
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


<div class="row">
   
         

  <div class="mani col-md-2">
       <a style="display: inline-block;" href="#"><img src="images/pic.svg" style="width: 25px;height: 25px"></a>
       &nbsp;
      
      <a style="display: inline-block;" href="myprofile.php"><p style="color: black"><?php echo ucfirst($student['name']) ?></p></a>
     <br>
      <a style="display: inline-block;" href="#"><img src="images/newsfeed.svg" style="width: 25px;height: 25px"></a>
      &nbsp;
      &nbsp;
      <a style="display: inline-block;" href="#"><p style="color: black">Newsfeed</p></a>
      <br>
         <form class="form-inline" method="get" action="name.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search People" name="query" style="width: 80%">
        &nbsp;
        <input type="submit" val="send"> 
        </form>
      
      <br>
       <a style="display: inline-block;" href="#"><img src="images/sponsor.svg" style="width: 25px;height: 25px"></a>
      &nbsp;
      &nbsp;
      <a style="display: inline-block;" href="sponsors1.php"><p style="color: black">Sponsors</p></a>
      <br>
     
      <a style="display: inline-block;" href="#"><img src="images/speak.png" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="speak.php"><p style="color: black">Alumnispeaks</p></a>
      <br>

      <a style="display: inline-block;" href="#"><img src="images/sig1.png" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="sig.php"><p style="color: black">SIG directory</p></a>
      <br>
      <a style="display: inline-block;" href="#"><img src="images/stuco.png" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="stucod.php"><p style="color: black">Co-ordinators</p></a>
      <br>
      <a style="display: inline-block;" href="#"><img src="images/magzi.jpg" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="am.php"><p style="color: black">Alumni magzine</p></a>
      <br>
      <a style="display: inline-block;" href="#"><img src="images/ass.svg" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="vnitaa.php"><p style="color: black">Alumni Association</p></a>
      <br>
      <a style="display: inline-block;" href="#"><img src="images/ass.svg" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="saasso.php"><p style="color: black">SA Association</p></a>
      <br>
      <a style="display: inline-block;" href="#"><img src="images/top.svg" style="width: 25px;height: 25px"></a>
      &nbsp;
      <a style="display: inline-block;" href="topal.php"><p style="color: black">Top Alumni</p></a>
      <br>
   </div>
   
   <div class="col-md-6" style="margin-top: 25px;text-align: center;height: 160vh;overflow: scroll;">
    <div class="card bg-light" style="height:160vh" >
      <div class="card-body text-center">


          <div class="card bg-light" style="min-height:60px" >
      <div class="card-body" style="text-align: left">
        <div class="row">
        <div class="col-md-4 col-xs-12" style="text-align: center;">
        <img src="images/post.svg" style="width: 80px;height: 80px;display: inline-block;">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
           Create Post
          </button>
      </div>

               
               <!-- The Modal -->
         <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
            <div class="modal-header">
             <h4 class="modal-title">Create Post</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                        <div class="row">
                           <input class="form-control mr-sm-2" type="text" placeholder="Write Something...." style="width: 60%;margin-left: 5px">

                       <label for="img"> <img src="images/img.svg" style="width: 40px;height: 40px;display: inline-block;margin-left: 10px"></label>
                        <input class="form-control mr-sm-2" type="file"  id="img" style="width: 80%;display: none;">
                        <label for="img"><img src="images/file.svg" style="width: 40px;height: 40px;display: inline-block;"></label>
                        <input class="form-control mr-sm-2" type="file"  id="img" style="width: 80%;display: none;">
                         <label for="img"> <img src="images/vid.svg" style="width: 40px;height: 40px;display: inline-block;"></label>
                        <input class="form-control mr-sm-2" type="file"  id="img" style="width: 80%;display: none;">
                             </div>
                      <input type="submit" class="btn btn-primary" style="margin-top: 25px">
                      </div>
                    </form>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
          </div>
         </div>
       </div>
          
           <div class="col-md-6 col-xs-12" style="text-align: center;padding-top: 15px">

         <input type="image" src="images/img.svg"  style="width: 40px;height: 40px;display: inline-block;">
         
         <input type="image" src="images/file.svg" style="width: 40px;height: 40px;display: inline-block;">
         <input type="image" src="images/vid.svg" style="width: 40px;height: 40px;display: inline-block;">  
         </div>
                 <div class="col-md-2 col-xs-12" style="padding-top: 15px;text-align: center;">
         <input type="submit" class="btn btn-primary" value="Post" >
                  </div>
                </div>
      </div>
    </div>

     <div class="card bg-light" style="margin-top:10px;min-height:490px" >
      <div class="card-body" style="text-align: left;background-color: #CCFFFF;width: 100%;">


       <a style="display: inline-block;" href="#"><img src="images/pic.svg" style="width: 25px;height: 25px;"></a>
      <a style="display: inline-block;" href="#"><p style="color: black">My profile</p></a>
     <a style="display: inline-block;float: right" href="#"> <img src="images/more.svg" style="width: 30px;height: 30px;"></a>
     
      <img src="images/nat.jpg" style="width: 100%;margin-top: 0px">

      <hr style="margin-bottom: 2px">

     <span style="display: block;">
      <h6 style="color: black;display:inline-block; block">Venue:</h6>
      <p style="color: black;display:inline-block;margin-bottom: 0px">hyderabad</p>
    </span>
    <span style="display: block;">
      <h6 style="color: black;display: inline-block">Event Details:</h6>
      <p style="color: black;display:inline-block;margin-bottom: 0px">16th april,2020.</p>
    </span>
    <span style="display: block;">
      <h6 style="color: black;display: inline-block">Description:</h6>
      <p style="color: black;">igglawjdaiHiDHGAIgdhAIUhgAIHigiugH:ghghIUhgAHGbU</p>
    </span>

      <hr style="margin-top: 6px;margin-bottom: 2px">

      <div class="row">

      <div class="col-md-5 col-xs-12" style="text-align: center;padding-top: 5px">
      <a style="display: inline-block;" href="#"><img src="images/like.svg" style="width: 25px;height: 25px;"></a>
      <a style="display: inline-block;" href="#"><p style="color: black">100 Likes</p></a>
      <a style="display: inline-block;" href="#"><img src="images/comment.svg" style="width: 25px;height: 25px;"></a>
      <a style="display: inline-block;" href="#"><p style="color: black">32 Comments</p></a>
      </div>

      <div class="col-md-7 col-xs-12" style="text-align: center;">
       <a style="display: inline-block;" href="#"><img src="images/like.svg" style="width: 40px;height: 40px;"></a> 
      <a style="display: inline-block;" href="#"><img src="images/comment.svg" style="width: 40px;height: 40px;"></a>
      <a style="display: inline-block;" href="#"><img src="images/share.svg" style="width: 40px;height: 40px;"></a>
      </div>
    </div>
      </div>
    </div>
         

      </div>
    </div>
  </div>



  <div class="col-md-4" style="padding-top: 25px;">

     <div class="man card bg-light">
      <div class="card-body text-center" style=" display: flex;align-items: center;justify-content: center">
        <p class="card-text">Student Corner</p>
      </div>
     </div>

     <br>

        <p class="man">
        <a href="#"><img src="images/letter.svg" style="width: 25px;height: 25px"></a>
        &nbsp;
        <a href="lor.php" style="color: black">Letter of recomendation</a>
        </p>
        <p>
         <form class="man1 form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search tech,projects,jobs" >
        &nbsp;
        <a href="#"><img src="images/search.svg" style="width: 25px;height: 25px"></a>
        </form>
      </p>
      <p class="man1" >
       <a href="#"> <img src="images/register.svg" style="width: 25px;height: 25px"></a>
        &nbsp;
        &nbsp;
        <a href="saa.php" style="color: black">SAA Registration</a></p>
      </p>
      <p class="man2">
       <a href="#"> <img src="images/vote.svg" style="width: 25px;height: 25px"></a>
        &nbsp;
        &nbsp;
        <a href="saavoting.php" style="color: black">SAA voting</a></p>
      </p>
      <p class="man3">
       <a href="#"> <img src="images/complaint.svg" style="width: 25px;height: 25px"></a>
        &nbsp;
        &nbsp;
        <a href="complaints.php" style="color: black">Complaints</a></p>
      </p>
      <p class="man4">
       <a href="#"> <img src="images/scholarship.svg" style="width: 25px;height: 25px"></a>
        &nbsp;
        &nbsp;
        <a href="scholarship.php" style="color: black">Scholarships</a></p>
      <br>

    <div class="man1 card bg-light" >
      <div class="card-body text-center">
         <a href="fest.php"><h5 style="text-align: center;color: blue">Fests</h5></a>
         <a href="fest.php"><img src="images/fest.png" style="width: 100%;height: 150px"></a>
         <a href="event.php"><h5 style="text-align: center;color: blue;margin-top: 15px">Events</h5></a>
         <a href="event.php"><img src="images/events.png" style="width: 100%" ></a>
      </div>
    </div>
    <br>
     <div class="man2 card bg-light">
      <div class="card-body text-center">
        <a href="gallery1.php"> <h5 style="text-align: center;color: blue;margin-top: 15px">Gallery</h5></a>
         <a href="gallery1.php"><img src="images/gal.jpg" style="width: 100%;height: 150px"></a>
      </div>
    </div>

  </div>

 <div style="background-image:url('images/map.png');background-size: cover;width:100%;min-height: 350px;margin-top: 20px">

    <h4 style="color: white;text-align: center;padding-top: 30px">Around the World</h4>

  <div style="padding-top: 30px;padding-left: 20%">

      <div style="display: inline-block;">
         <img src="images/city.svg" style="width: 50px;height: 50px">
         <h6 style="color: white;">Mumbai</h6>
         <h6 style="color: white">432 Alumni</h6>
      </div>
      <div style="display: inline-block;padding-left: 28%">
          <img src="images/city.svg" style="width: 50px;height: 50px">
          <h6 style="color: white;">Nagpur</h6>
          <h6 style="color: white">736 Alumni</h6>
     </div>
     <div style="display: inline-block;padding-left: 30%">
          <img src="images/city.svg" style="width: 50px;height: 50px">
           <h6 style="color: white;">Banglore</h6>
           <h6 style="color: white">392 Alumni</h6>
     </div>

  </div>

  <div style="text-align: center;padding-top: 20px;padding-bottom: 10px">
   <button type="button" class="btn btn-light" style="background: rgba(255,255,255,0.1);color: white">Explore On Map</button> 
  </div>

</div>

<div style="background-color: #222;width: 100%;min-height: 20vh;margin-top: 1px">
<div class=" row">
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