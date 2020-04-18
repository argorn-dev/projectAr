<?php include('select_election_data.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SELECT ELECTION</title>

  <!-- Bootstrap styles for this project-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="form_login.css" rel="stylesheet">



</head>
  <style type="text/css">
  


 
</style>
<body >







    

<br>
<br>

<center>
<img src="knust.png">
<br>
<br>
<h1>Create A Poll</h1>

<div class="container">

<div class="row justify-content-center ">
  <form method="post" action="create_poll.php" method="POST">
   

    <br>
    

    <div class="form-group">
    	<center><div class="error"><?php include('errors.php'); ?></div>
        <label><h2>Enter Election name</h2></label>
      <center>
      <input type="text" placeholder="Enter Election name" name="election" class="form-control form-control-user" >
      </center>
   <br>
      <div class="form-group">
     <div class="col-lg-12 col-md-12 col-sm-12">
      <button type="submit" class="form-control btn btn-success btn-block " name="submit">Submit</button>
    </div>
    <br>
    <br>
    <center>
      <a style="color: blue;
      font-size: 18px;
      font-family: arial;
      text-shadow: black;
      text-decoration: none; " href="manage.php"><< Back >></a>
    </center>
    
    
    </div>
    <br>


    <br>
    <br>
    
    
  </form>
 
</center>


<br>
<br>
<br>
<br>

</div>


  
 



 
  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>



?>