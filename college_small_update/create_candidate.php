<?php include('process.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: CREATE CANDIDATES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="container">
    <form method="POST" action="create_candidate.php" class="container-fluid col-6" style="margin-top: 0 auto; border-bottom: 2px solid green">
  <center>  
  <br>

  <div>
    <h2>Register Candidate</h2>
  </div>  
  <br>
  <div class="row justify-content-center ">
    <img src="knust.png" alt="LOGO" class="img rounded" id="admin" >
  </div>
  </center>
 <br> 
 
<div class="form-group">

        <label>Enter Candidate's name</label>
      <center>
      <input type="text" placeholder="Enter name" name="name" class="form-control form-control-user" >
      </center>
      </div>
      <div class="form-group">
        <label>Enter Candidate's Position</label>
      <center>
      <input type="text" placeholder="Enter Position" name="position" class="form-control form-control-user" >
      </div>
      <div class="form-group">
    <label for="email">Enter Candidate's Email Address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Candidate's Email Address" aria-describedby="emailHelp">
   </div>
      <div class="form-group">
        <label>Enter Short Biography of Candidate</label>
      <center>
      <textarea type="text"  placeholder="Enter Short Biography" placeholder="Candidate's Biography" name="bio" class="form-control form-control-user" > </textarea>
      </div>
      <div class="form-group">
        <label>Pick Image of Candidate</label>
      <center>
      <input type="file" placeholder="Pick Image" name="image" class="form-control form-control-user" >
      </div>
      <br>
      <br>
    <div class="text-right">
    <button type="submit" class="btn btn-success" name="save">Submit Candidate</button>
</div>
</form>

<br>
<br>
  </div>



  

  


  </center>
  

</div>
  </div>
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