<?php 
  session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KWAME NKRUMAH UNIVERSITY OF SCIENCE AND TECHNOLOGY</title>

  <!-- Bootstrap styles for this project-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

  <link href="font.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
  <style type="text/css">
  

body{
background: #fff;
    font-family: 'Varela Round', sans-serif;

  }
    .form-inline {
        display: inline-block;
    }
  .navbar-header.col {
    padding: 0 !important;
  } 
  .navbar {   
    background:  powderblue;
    padding-left: 16px;
    padding-right: 16px;
    position: sticky;
  }

</style>
<body >

<center>

<div style="background-color: lightgreen; color: white; font-family: arial; text-align: center; font-size: 35px;bottom: 0px;">
<br>

<p>UNIVERSITY OF CAPE COAST</p>


<br>


</div>
</center>

    <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color:lightgreen;color: blue;">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><?php  if (isset($_SESSION['index_number'])) : ?>
      <p style="font-family: Arial; font-size: 18px; color:blue;"><strong> Welcome <?php echo $_SESSION['index_number']; ?></strong></p></a>
      <?php endif ?>


  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav nav-pills nav-justified">
      <li class="nav-item">
      
        <a class="nav-link" href="#"><i class="fas fa-vote-yea"></i> Vote</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-poll"></i></i> View results</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>

<br>

<center>
<h1 class="wel">Welcome </h1>
<?php  if (isset($_SESSION['index_number'])) : ?>
      <p style="font-family: Arial; font-size: 35px;"><strong><?php echo $_SESSION['index_number']; ?></strong></p></a>
      <?php endif ?>
<h1>to</h1>
<h2>KWAME NKRUMAH UNIVERSITY OF SCIENCE AND TECHNOLOGY</h2>
<h2>Colleges Election</h2>
<br>
<hr>
<br>
<h3 style="color: red;">!! Please there is no ongoing elections at the moment.. Hence the system is on lockdown.. !!</h3>
<h3 style="color: red;"> You will be notified when there is any ongoing election </h3> 
 
</center>





<br>
<br>
<br>
<br>


<footer style="background-color: lightgreen;">



<div class="footer" style="background-color: lightgreen;">
  

 
<br>

    <br>
    <br>
  <center>
  <p class="foot">&copy;Copyright 2020 All rights reserved. UNIVERSITY OF CAPE COAST. Voting System..      
</center>
  
  <br>
  <br>
  <br>
  
    
  </p>



</footer>




 
  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
