<?php include('process.php') ?>
<?php include('poll_data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: STUDENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<style type="text/css">


</style>
<body>
  <br>
    
   
        <h2 style="color: green;"> <u>Welcome to Manage Poll</u></h2>
        <h6 style="color: green;" >Use the Dashboard to continue Navigation</h6>
    
 <br><br>
<div class="container">
<div style="margin-top: 0 auto; border-bottom: 2px solid green" class="container-fluid col-6">
  <div class="text-right">
    <?php echo "<a href='see_poll_candidates.php?poll=".$_GET['poll']."'><button type='submit' class='btn btn-success btn-lg' name='go'>See Candidates</button></a>" ?>
  </div>
</div> 


</div>

<br>
<br>




<br>
<br>
<div class="container">
<div style="margin-top: 0 auto; border-bottom: 2px solid green" class="container-fluid col-6">
  <div class="text-left">
    <?php echo "<a href='create_candidate.php'><button type='submit' class='btn btn-info btn-lg' name='save'>Add Candidates</button></a>" ?>
  </div>
</div> 

</div>


<br>
<br>
<br>
<br>
<hr style="color: green; border-radius: 5px;">



</body>
</html>