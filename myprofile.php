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
     $rows1 = $con->query("select* from intro where `student_id`='$userName'") or die($con->error);
    if($rows1->num_rows)
    {
      $intro = $rows1->fetch_assoc();
    
    }
    else
    {
      echo "<p>Student details not found</p>";
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My profile</title>
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



<div class="card bg-light " style="margin-top: 20px;min-height: 200vh;margin-left: 10%;margin-right: 10%;">
  <div class="card-body text-center" style="background-color: #E6E6FA">


        <div class="card bg-light " style="margin-top: 20px;">
        <div class="card-body text-center" style="background-image: url(images/vnit1.jpg);background-size: cover;height: 500px">

          <div class="card bg-light " style="margin-left: 35%;margin-right: 35%">
           <div class="card-body text-center" style="background-size: cover;background-image: url(images/chandu.jpg);width:100%;min-height: 400px;border-radius: 5px">
           </div>
          </div>

          
             <div class="row" style="padding-top: 25px">
               <div class="col-md-3" style="text-align: center;background-color: #E9EBEE">
                <h5 style="color: blue;padding: 2px"><?php echo ucfirst($student['name']) ?></h5>
               </div>
               <div class="col-md-2" style="text-align: center;background-color:blue">
                 <a href="myprofile.php"> <button type="button" class="btn btn-link" style=" color: white" >Timeline</button></a>
               </div>
               
                <div class="col-md-1" style="text-align: center;background-color:#E9EBEE">
                 <a href="aboutprof.php"> <button type="button" class="btn btn-link" style=" color: black" >About</button></a>
               </div>
               <div class="col-md-2" style="text-align: center;background-color: blue">
                 <a href="following.php"> <button type="button" class="btn btn-link" style=" color: white" >Following</button></a>
               </div>
               <div class="col-md-2" style="text-align: center;background-color:#E9EBEE">
                <a href="photos.php"> <button type="button" class="btn btn-link" style=" color: black" >Photos</button></a>
               </div>
                <div class="col-md-2" style="text-align: center;background-color:blue">
                <a href="signout.php"> <button type="button" class="btn btn-link" style=" color: white" >Signout</button></a>
               </div>
             </div>
           </div>
         </div>

<div class="row">          
  <div class="col-md-8" style="margin-top: 25px;text-align: center;height: 160vh;overflow: scroll;">
    <div class="card bg-light" style="height:160vh" >
      <div class="card-body text-center">


       <div class="card bg-light" style="min-height:60px" >
          <div class="card-body" style="text-align: left">
            <div class="row">
                <div class="col-md-6 col-xs-12" style="text-align: center;">
                    <img src="images/post.svg" style="width: 60px;height: 60px;display: inline-block;">
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
                      
                       
                       <form class="form-inline">
                      <div class="modal-body">
                        <div class="row">
                           <input class="form-control mr-sm-2" id="smtg" type="text" placeholder="Write Something...." style="width: 60%;margin-left: 5px">
                         </form>
                            <form class="form-inline" method="post" enctype="multipart/form-data">
                       <label for="img"> <img src="images/img.svg" style="width: 40px;height: 40px;display: inline-block;margin-left: 10px"></label>
                        <input class="form-control mr-sm-2" type="file"  id="img" style="width: 80%;display: none;">
                        <label for="img"><img src="images/file.svg" style="width: 40px;height: 40px;display: inline-block;"></label>
                        <input class="form-control mr-sm-2" type="file"  id="img" style="width: 80%;display: none;">
                         <label for="img"> <img src="images/vid.svg" style="width: 40px;height: 40px;display: inline-block;"></label>
                        <input class="form-control mr-sm-2" type="file"  id="img" style="width: 80%;display: none;">
                             </div>
                      <span id="post" class="btn btn-primary" style="margin-top: 25px">submit</span>
                      </div>
                    </form>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                      </div>
                     </div>
                   </div>
                              
                   <div class="col-md-4 col-xs-12" style="text-align: center;padding-top: 15px">

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
   
   <div class="col-md-4" style="padding-top: 25px;padding-left: 5px">
     <div class="card bg-light"  >
      <div class="card-body text-center">
        <div class="row" style="padding-left: 100px">
            <img src="images/intro.svg" style="width: 25px;height: 25px;">
            <h5 style="color: black">My Intro</h5>
        </div>
        <hr>
        <div class="row">
            <p style="color: black;padding-left: 120px"><?php echo ucfirst($student['name']) ?>'s Bio:&nbsp;&nbsp;<?php echo ucfirst($intro['bio']) ?></p>
        </div>
        <hr>
        <div class="row">
            <img src="images/work.svg" style="width: 25px;height: 25px;">
            <p style="color: black">Work experience:&nbsp;&nbsp;<?php echo ucfirst($intro['work']) ?></p>
        </div>
        <div class="row">
            <img src="images/study.svg" style="width: 25px;height: 25px;">
            <p style="color: black">Studied at:&nbsp;&nbsp;<?php echo ucfirst($intro['studied']) ?></p>
        </div>
        <div class="row">
            <img src="images/study.svg" style="width: 25px;height: 25px;">
            <p style="color: black">Studied at:&nbsp;&nbsp;<?php echo ucfirst($intro['studiedat']) ?></p>
        </div>
        <div class="row">
            <img src="images/home.svg" style="width: 25px;height: 25px;">
            <p style="color: black">Lives in:&nbsp;&nbsp;<?php echo ucfirst($intro['lives']) ?></p>
        </div>
        <hr>
        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal1"> Edit Details</button>
           <!-- The Modal -->
                     <div class="modal" id="myModal1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                  
                    <!-- Modal Header -->
                        <div class="modal-header">
                         <h4 class="modal-title">Edit Your Details</h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    <form class="form-inline">
                    <!-- Modal body -->
                      <div class="modal-body">
                        <input id="bioField" class="form-control mr-sm-2" type="text" placeholder=" Your Bio..." style="width: 80%">
                      </div>
                      <div class="modal-body">
                        <hr>
                        <div class="row">
                            <img src="images/work.svg" style="width: 25px;height: 25px;">
                            <input id="workEx" class="form-control mr-sm-2" type="text" placeholder=" Work experience" style="width: 80%">
                        </div>
                        <div class="row">
                            <img src="images/study.svg" style="width: 25px;height: 25px;">
                            <input id="studiedone" class="form-control mr-sm-2" type="text" placeholder=" Studied at" style="width: 80%">
                        </div>
                        <div class="row">
                            <img src="images/study.svg" style="width: 25px;height: 25px;">
                            <input id="studiedtwo" class="form-control mr-sm-2" type="text" placeholder=" Studied at" style="width: 80%">
                        </div>
                        <div class="row">
                            <img src="images/home.svg" style="width: 25px;height: 25px;">
                            <input id="lives" class="form-control mr-sm-2" type="text" placeholder="Lives in" style="width: 80%">
                        </div>
                        <hr>
                      <span id="intro-submit" class="btn btn-primary" style="margin-left: 30px">Submit</span>
                      </div>
                     </form>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                      </div>
                     </div>
                   </div>
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

<script>
  $(document).ready(function(){
  $("#intro-submit").on("click",function(){
    
      $bio = $("#bioField").val();

      $work = $("#workEx").val();
      
      $studied= $("#studiedone").val();
      $studiedat = $("#studiedtwo").val();
      $lives =$("#lives").val();
      $.ajax({
        url: 'intro-val.php',
        type:'POST',
        data:{
          'bio' : $bio,
          'work' : $work,
          'studied' : $studied,
          'studiedat' : $studiedat,
          'lives' : $lives,
        },

        success:function(data){
          if(data == "1")
          {
            $('#myModal1').modal('toggle');
            $("#myModal1").load(" #myModal1");
          }
          else{
            alert('Some error occured please try again');
          }
        }
      })
   
  });
$("#post").on("click",function(){
       $description = $("#smtg").val();
       $.ajax({
        url: 'post-val.php',
        type:'POST',
        data:{
          'description' : $description,
        },
        success:function(data){
          
          if(data == "1")
          {
            $('#myModal').modal('toggle');
            $("#myModal").load(" #myModal");
          }
          else{
            alert('Some error occured please try again');
          }
        }
      })
  });
});
</script>

</body>
</html>