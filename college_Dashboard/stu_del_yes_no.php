<?php include ("students_database_delete.php") ?>
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
    <div class="container" style="margin-top: 10%;">

  <form method="POST" action="stu_del_yes_no.php" class="container-fluid col-6" >
 
  <center>    
  <div class="row justify-content-center ">
    <img src="knust.png" alt="LOGO" class="img rounded" id="admin" >
  </div>
  </center>
 <br> 
 <center >
 <div class="form-column">
    <label for="text" style="color: red;">Do you want to delete Student's Database?? </label>
  </div>

<div class="form-row" style="margin-left: 170px;">
    <div class="text-right">
    <button type="submit" class="btn btn-danger" name="yes">YES</button>
</div>
<div class="text-left">
    <button type="submit" class="btn btn-success" name="no">NO</button>
</div>
</div>
</center>
</div>

</form>

  </div>
</body>
</html>


