<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIGN_UP</title>

  <!-- Bootstrap styles for this project-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="form_login.css" rel="stylesheet">

  <!--<link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body style="background-color: lightgreen;">
<br><br>

<div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2 offset-md-3"> 
    <div class="card card-body" >
      <center> 
      <img src="knust.png">
      <br>   
      
      <br>

      <h3 class="text-center text-primary" id="head">KWAME NKRUMAH UNIVERSITY OF SCIENCE AND TECHNOLOGY</h3>
      <br>
      <hr>
      <h4 class="text-center" >SignUp</h4>
      <hr>
	</center>
  <form method="post" action="register.php" method="POST">
  	<center><div class="error"><?php include('errors.php'); ?></div>

    <br>
    </center>

    <div class="form-group">

        <label>Index number</label>
      <center>
      <input type="text" placeholder="Enter index number" name="index_number" class="form-control form-control-user" >
      </center>
      </div>
      <div class="form-group">
        <label>Password</label>
      <center>
      <input type="password" placeholder="Enter password" name="password_1" class="form-control form-control-user" >
      </div>
      <br>
      <div class="col-lg-12 col-md-6 col-sm-6">
      <fieldset >
          <legend>Select College</legend>
          <p>
             <label style="font-size: 20px;">Colleges</label>
             <select id = "myList" class="col-lg-12 col-md-6 col-sm-6" style="font-size:20px;" name="list">
               <option value = "College of Education">College of Education</option>
               <option value = "College of Science">College of Science</option>
               <option value = "College of Agriculture and Natural Resources CANR">College of Agriculture and Natural Resources CANR</option>
               <option value = "College of Health Sciences">College of Health Sciences</option>
               <option value = "College of Humanities and Social Sciences">College of Humanities and Social Sciences</option>
               <option value = "College of Art and Built Environment">College of Art and Built Environment</option>
               <option value = "College of Engineering">College of Engineering</option>
               <option value = "College of Science">College of Science</option>
             </select>
          </p>
       </fieldset>
       </div>
    <br>
      <div class="form-group">
  	 <div class="col-lg-12 col-md-12 col-sm-12">
  	  <button type="submit" class="form-control btn btn-success btn-block " name="reg_user">Register</button>

  	</div>

    
       
    <br>

    
    
    </div>
    <br>
    <center>

      <a style="color: blue;
      font-size: 18px;
      font-family: arial;
      text-shadow: black;
      text-decoration: none; " href="index.php"><< Back</a>
    </center>

    <br>
    <br>
    
  	
  </form>
  

  </div>
</div>
<br>
<br>
<br>
<br>


<script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>