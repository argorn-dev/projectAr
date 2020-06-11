<?php include('index_data.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: COLLEGE HEAD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <br>
    <div class="container">
  <h1 class="bg-white text-success text-center" >KNUST COLLEGE VOTING</h1>
  <span>
    <div class="text-center" >
        <h4 > College login</h4>
        <hr style="border-bottom: 2px solid green; margin-top:30px;" >
      </div>
  </span>
  </div>


  <br>
  <br>         

<div class="container">
    <form method="POST" action="index.php" class="container-fluid col-6" style="margin-top: 0 auto; border-bottom: 2px solid green">
       <center><div class="error"><?php include('errors.php'); ?></div></center>

  <center>    
  <div class="row justify-content-center ">
    <img src="knust.png" alt="LOGO" class="img rounded" id="admin" >
  </div>
  </center>
 <br> 
 <div class="form-group">
    <label for="text">Enter Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
   </div>
  
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  
    <div class="text-right">
    <button type="submit" class="btn btn-success" name="login" >Login</button>
</div>
</form>
  </div>
</body>
</html>



