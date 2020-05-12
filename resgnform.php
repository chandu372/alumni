<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumni registration </title>
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
      <a class="nav-link" href="About-us.php">about us</a>
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

   <h3 style="color: green;padding-top: 50px;text-align: center;">Alumni Registration Form</h3>
  <form action="alm-regsn-val.php" class="was-validated" method="POST">
    <div class="form-group container">
      <label for="uname" style="padding-top: 30px;color: white">Name:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Name" name="name" required <?php if(isset($_SESSION['name'])){
        echo "Value= $_SESSION[name]";
      } ?> >
      <?php  
      
       if(isset($_SESSION["nameerr"]) && $_SESSION["nameerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid name</span>";

       }
       ?>
      <br>

      <label for="uname" style="color: white">Mother name:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Mother Name" name="mothername" required <?php if(isset($_SESSION['mothername'])){
        echo "Value=$_SESSION[mothername]";
      } ?> >
      <?php  
      
       if(isset($_SESSION["mothernameerr"]) && $_SESSION["mothernameerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid name</span>";

       }
       ?>
       <br>

      <label for="uname" style="color: white">Father name:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Father Name" name="fathername" required <?php if(isset($_SESSION['fathername'])){
        echo "Value=$_SESSION[fathername]";
      } ?> >
      
      <?php  
      
       if(isset($_SESSION["fathernameerr"]) && $_SESSION["fathernameerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid name</span>";

       }
       ?>
       <br>

      <label for="gender" style="color: white">Gender:</label>
      <br>
      <select name="gender" id="gender" class="inputTxt" required>
                              <option value="NULL" >--Select--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Transgender">Transgender</option>

      </select>
      <br>
      <br>
      <h5 style="color: white">Education details</h5>
       <label for="degree" style="color: white">Degree:</label>
       <br>
       <select name="degree" id="degree" onchange="SelectBranch();" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="BTech">B.Tech</option>
                              <option value="BArch">B.Arch</option>
                              <option value="MSc">M.Sc</option>
                              <option value="Phd">Ph.d</option>
                              <option value="Mtech">M.tech</option>
       </select>
       <br>

       <label for="branch" style="color: white">Branch:</label>
       <br>
       <select name="branch" id="branch" onchange="SelectBranch();" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="cse">cse</option>
                              <option value="ece">ece</option>
                              <option value="eee">eee</option>
                              <option value="mech">mech</option>
                              <option value="meta">meta</option>
                              <option value="civil">civil</option>
                              <option value="chem">chem</option>
                              <option value="min">min</option>
                              <option value="Appliedchem">Applied Chemistry</option>
                              <option value="Appliedmath">Applied Mathematics</option>
                              <option value="Appliedmech">Applied Mechanics</option>
                              <option value="Applied Physics">Applied Physics</option>
                              <option value="Applied Statistics">Applied Statistics</option>
                              <option value="Applied and Environmental Microbiology">Applied and Environmental Microbiology</option>
                              <option value="Biomechatronics">Biomechatronics</option>
                              <option value="Biomedical Engineering">Biomedical Engineering</option>
                              <option value="Computational Physics">Computational Physics</option>
                              <option value="Geoscience and Technology">Geoscience and Technology</option>
                              <option value="Geobiology">Geobiology</option>
                              <option value="Humanities and Social Sciences">Humanities and Social Sciences</option>
                              <option value="Hydrologic Engineering">Hydrologic Engineering</option>
                              <option value="Industrial and Manufacturing Engineering">Industrial and Manufacturing Engineering</option>
                              <option value="Urban Design & Planning">Urban Design & Planning</option>


       </select>
       <br>
       <label for="year" style="color: white">Year of Completion:</label>
       <br>
       <select name="year" id="year" onchange="SelectBranch();" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="1960 - 1961">1960 - 1961</option>
                              <option value="1961 - 1962">1961 - 1962</option>
                              <option value="1962 - 1963">1962 - 1963</option>
                              <option value="1963 - 1964">1963 - 1964</option>
                              <option value="1964 - 1965">1964 - 1965</option>
                              <option value="1965 - 1966">1965 - 1966</option>
                              <option value="1966 - 1967">1966 - 1967</option>
                              <option value="1967 - 1968">1967 - 1968</option>
                              <option value="1968 - 1969">1968 - 1969</option>
                              <option value="1969 - 1970">1969 - 1970</option>
                              <option value="1970 - 1971">1970 - 1971</option>
                              <option value="1971 - 1972">1971 - 1972</option>
                              <option value="1972 - 1973">1972 - 1973</option>
                              <option value="1973 - 1974">1973 - 1974</option>
                              <option value="1974 - 1975">1974 - 1975</option>
                              <option value="1975 - 1976">1975 - 1976</option>
                              <option value="1976 - 1977">1976 - 1977</option>
                              <option value="1977 - 1978">1977 - 1978</option>
                              <option value="1978 - 1979">1978 - 1979</option>
                              <option value="1979 - 1980">1979 - 1980</option>
                              <option value="1980 - 1981">1980 - 1981</option>
                              <option value="1981 - 1982">1981 - 1982</option>
                              <option value="1982 - 1983">1982 - 1983</option>
                              <option value="1983 - 1984">1983 - 1984</option>
                              <option value="1984 - 1985">1984 - 1985</option>
                              <option value="1985 - 1986">1985 - 1986</option>
                              <option value="1986 - 1987">1986 - 1987</option>
                              <option value="1987 - 1988">1987 - 1988</option>
                              <option value="1988 - 1989">1988 - 1989</option>
                              <option value="1989 - 1990">1989 - 1990</option>
                              <option value="1990 - 1991">1990 - 1991</option>
                              <option value="1991 - 1992">1991 - 1992</option>
                              <option value="1992 - 1993">1992 - 1993</option>
                              <option value="1993 - 1994">1993 - 1994</option>
                              <option value="1994 - 1995">1994 - 1995</option>
                              <option value="1995 - 1996">1995 - 1996</option>
                              <option value="1996 - 1997">1996 - 1997</option>
                              <option value="1997 - 1998">1997 - 1998</option>
                              <option value="1998 - 1999">1998 - 1999</option>
                              <option value="1999 - 2000">1999 - 2000</option>
                              <option value="2000 - 2001">2000 - 2001</option>
                              <option value="2001 - 2002">2001 - 2002</option>
                              <option value="2002 - 2003">2002 - 2003</option>
                              <option value="2003 - 2004">2003 - 2004</option>
                              <option value="2004 - 2005">2004 - 2005</option>
                              <option value="2005 - 2006">2005 - 2006</option>
                              <option value="2006 - 2007">2006 - 2007</option>
                              <option value="2007 - 2008">2007 - 2008</option>
                              <option value="2008 - 2009">2008 - 2009</option>
                              <option value="2009 - 2010">2009 - 2010</option>
                              <option value="2010 - 2011">2010 - 2011</option>
                              <option value="2011 - 2012">2011 - 2012</option>
                              <option value="2012 - 2013">2012 - 2013</option>
                              <option value="2013 - 2014">2013 - 2014</option>
                              <option value="2014 - 2015">2014 - 2015</option>
                              <option value="2015 - 2016">2015 - 2016</option>
                              <option value="2016 - 2017">2016 - 2017</option>
                              <option value="2016 - 2017">2016 - 2017</option>
                              <option value="2018 - 2019">2018 - 2019</option>
                              <option value="2019 - 2020">2019 - 2020</option>
       </select>
       <br>
       <br>
       <h5 style="color: white">Employment status</h5>
       <label for="emptype" style="color: white">Type:</label>
       <br>
       <select name="employment-status" id="emptype" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="Salaried">Salaried</option>
                              <option value="Own">Entrepreneur</option>
                              <option value="housewife">HouseMaker</option>
                              <option value="Unemployed">Yet to be Placed</option>
      </select>
      <br>
      <label for="uname" style="color: white">Designation:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Designation" name="designation" <?php if(isset($_SESSION['designation'])){
        echo "Value=$_SESSION[designation]";
      } ?> >
      
      <?php  
      
       if(isset($_SESSION["designationerr"]) && $_SESSION["designationerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid designation</span>";

       }
       ?>
      <br>
      <h5 style="color: white">Work Location</h5>
      <label for="uname" style="color: white">Country:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Country" name="country" <?php if(isset($_SESSION['country'])){
        echo "Value=$_SESSION[country]";
      } ?>  >
      <?php  
      
       if(isset($_SESSION["countryerr"]) && $_SESSION["countryerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid country</span>";

       }
       ?>
      <br>
      <label for="uname" style="color: white">State:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter state" name="state" <?php if(isset($_SESSION['state'])){
        echo "Value=$_SESSION[state]";
      } ?>  >
      <?php  
      
       if(isset($_SESSION["stateerr"]) && $_SESSION["stateerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid state</span>";

       }
       ?>
      <br>
      <label for="uname" style="color: white">City:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter City" name="city" <?php if(isset($_SESSION['city'])){
        echo "Value=$_SESSION[city]";
      } ?>  >
      <?php  
      
       if(isset($_SESSION["cityerr"]) && $_SESSION["cityerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid city</span>";

       }
       ?>
      <br>
      <h5 style="color: white">Special Achievements After graduation:</h5>
      <input type="text" class="form-control"  id="uname" placeholder="" name="achievments" optional <?php if(isset($_SESSION['achievments'])){
        echo "Value=$_SESSION[achievments]";
      } ?>  >
      <br>

      <h5 style="color: white">Higher Studies:</h5>
      
      <label for="hs_status" style="color: white">present status:</label>
       
      <select name="presentstatus" id="hs_status" class="inputTxt" required>
                              <option >--Select--</option>
                              <option value="Completed">Completed</option>
                              <option value="Persuing">Persuing</option>
                              <option value="nothing further">Nothing Further</option>
                           </select>
      <br>
      <label for="uname" style="color: white">University name:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter University" name="universityname" <?php if(isset($_SESSION['universityname'])){
        echo "Value=$_SESSION[universityname]";
      } ?>  >
      
      <label for="uname" style="color: white">Place:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Place" name="place" <?php if(isset($_SESSION['place'])){
        echo "Value=$_SESSION[place]";
      } ?>  >
      <?php  
      
       if(isset($_SESSION["placeerr"]) && $_SESSION["placeerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid place</span>";

       }
       ?>
       <br>

      <label for="uname" style="color: white">study:</label>
      <input type="text" class="form-control"  id="uname" placeholder="Enter study" name="study" <?php if(isset($_SESSION['study'])){
        echo "Value=$_SESSION[study]";
      } ?> >
      <br>
      
      <h5 style="color: white">Residential details</h5>
      <label for="uname" style="color: white">Address:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Address" name="address" required <?php if(isset($_SESSION['address'])){
        echo "Value=$_SESSION[address]";
      } ?> >
      <label for="uname" style="color: white">Mobile No:</label>
       <br>
      <input type="text" class="form-control"  id="uname" placeholder="Enter Mobile no" name="mobile" required <?php if(isset($_SESSION['mobile'])){
        echo "Value=$_SESSION[mobile]";
      } ?> >
      <?php  
      
       if(isset($_SESSION["mobileerr"]) && $_SESSION["mobileerr"]==1)
       {
        echo "<span style=\"color:white\">enter valid mobile no</span>";

       }
       ?>
       
       <br>
      <label for="uname" style="color: white">E-mail id:</label>
       <br>
      <input type="email" class="form-control"  id="uname" placeholder="Enter E-mail" name="email" required <?php if(isset($_SESSION['email'])){
        echo "Value=$_SESSION[email]";
      } ?> >
      
       <?php 
      if(isset($_SESSION["emailerr"]) && $_SESSION["emailerr"]==1)
       {
        echo "<span style=\"color:white\">enter new email id</span>";

       }
       ?>

       <br>
      
      <label for="uname" style="color: white">Password:</label>
      <input type="password" class="form-control"  id="uname" placeholder="Enter Password" name="password" required>


      <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required value="1"> I agree on giving my credentials.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

   <div class="row">
   <div class="col-md-6" style="display: block;text-align: center;margin-top: 10px; ">
    <a href="https://www.facebook.com/VNITAlumni"> <img src="images/fb.png"></a>
    <span style="color: blue">Facebook</span>
    <br>
    <a href="https://www.linkedin.com/groups/NIT-Nagpur-VNIT-VRCE-Alumni-50753/about"> <img src="images/lin.png"></a>
    <span style="color: blue">Linkedin</span>
  </div>
  <div class="col-md-6" style="display: inline-block;text-align: center;margin-top: 10px; ">
    <h5 style="color: white; ">Email:<a href="mailto:info@vnitaa.com">info@vnitaa.com</a></h5>
   <h5 style="color: white;">Contact:<a href="tel:+91–9096399077">9096399077</a></h5>
  </div>
  <div class="col-md-12" style="color:white; text-align: center; margin-top: 10px; ">
  Copyright © 2020  Designed & Developed by: Manish chandra. All rights reserved.
  </div>
  <?php
    session_destroy();
    ?>
</body>
</html>