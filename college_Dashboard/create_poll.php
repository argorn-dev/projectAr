<?php include('poll_data.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: STUDENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <br>
    
    <div class="text-center" > 
        <h2 > Create a Poll</h2>
      </div>
 


  <br>
  <br>

<div class="container">
    <form method="POST" action="create_poll.php" class="container-fluid col-6" style="margin-top: 0 auto; border-bottom: 2px solid green">
      <center><div class="error"><?php include('errors.php'); ?></div></center>

  <center>    
  <div class="row justify-content-center ">
    <img src="knust.png" alt="LOGO" class="img rounded" id="admin" >
  </div>
  </center>
 <br> 
 <div class="form-group">
    <label for="text">Enter Polls Name </label>
    <input type="text" class="form-control" name="poll" id="poll" placeholder="Enter Polls Name.." aria-describedby="text">
   </div>
   
  
  
  <br>

    <div class="text-right">
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
</div>
</form>
  </div>
</body>
</html>