<!DOCTYPE html>
<html lang="en">
<head>
  <title>alumni intro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  	    </style>
</head>
<body style="background-color: black">

   <div class="container" style="margin-top: 30px">
   	<h3 style="color: white">Please fill the details:</h3> 
      <form action="intro-val.php"  method="POST">
    <div class="form-group">
      <label for="tech"><p style="color: white">Techs known:</p></label>
      <input type="text" class="form-control" id="tech" placeholder="Enter techs known" name="tech" required>
    </div>
    <div class="form-group">
      <label for="projects"><p style="color: white">Projects worked on:</p></label>
      <input type="text" class="form-control" id="projects" placeholder="Enter Projects" name="projects" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" value="1"> <p style="color: red">Remember me</p>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
   </div>


 <div class="row" style="text-align: center;margin-top: 30px">
   <div class="col-md-6 col-xs-12" style="display: block;text-align: center;margin-top: 50px; ">
    <a href="https://www.facebook.com/VNITAlumni"> <img src="images/fb.png"></a>
    <span style="color: blue">Facebook</span>
    <br>
    <a href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about"> <img src="images/lin.png"></a>
    <span style="color: blue">Linkedin</span>
  </div>
  <div class="col-md-6 col-xs-12" style="display: inline-block;text-align: center;margin-top: 50px; ">
    <h5 style="color: white; ">Email:<a href="mailto:info@vnitaa.com">info@vnitaa.com</a></h5>
   <h5 style="color: white;">Contact:<a href="tel:+91–9096399077">9096399077</a></h5>
  </div>
  <div class="col-md-12" style="color: white; text-align: center; margin-top: 10px; ">
  Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.
  </div>

</body>
</html>
