<?php include('change_password_data.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: CREATE CANDIDATES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<br>

 
<h3 align="center" style="color: green">CHANGE PASSWORD</h3>
 <br>

<div class="row justify-content-center ">

<form method="post" action="change_password.php" class="container-fluid col-6">
<center><div class="error"><?php include('errors.php'); ?></div></center>

<br>
<div class="form-group">
        <label>E-mail</label>
      <center>
      <input type="email" placeholder="Enter Position" name="email" class="form-control form-control-user" >
      </div>

      <div class="form-group">
        <label>Password</label>
      <center>
      <input type="password" placeholder="Enter Position" name="password" class="form-control form-control-user" >
      </div>

      <div class="form-group">
        <label>New Password</label>
      <center>
      <input type="password" placeholder="Enter Position" name="new_password" class="form-control form-control-user" >
      </div>

      <div class="form-group">
        <label>Confirm Password</label>
      <center>
      <input type="password" placeholder="Enter Position" name="confirm_password" class="form-control form-control-user" >
      </div>
<br><br>
 <button type="submit" class="btn btn-success" name="sub">Change Password</button>

 </form>
 
 </div>

<br>
<br>


</body>
</html>
