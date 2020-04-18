<?php include('process.php') ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CREATE A POLL</title>

  <!-- Bootstrap styles for this project-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="form_login.css" rel="stylesheet">


  <!--<link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body style="background-color: white;">
<br><br>


      <center> 
      <img src="knust.png">
      <br>   
      
      <br>

      
  </center>

<div class="container">

<div class="row justify-content-center ">
  <form method="post" action="create_poll.php" method="POST">
   

    <br>
    </center>

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
        <label>Enter Short Biography of Candidate</label>
      <center>
      <textarea type="text"  placeholder="Enter Short Biography" name="biography" class="form-control form-control-user" > Enter Short Biography Here.....</textarea>
      </div>
      <div class="form-group">
        <label>Pick Image of Candidate</label>
      <center>
      <input type="file" placeholder="Pick Image" name="image" class="form-control form-control-user" >
      </div>
      <br>
      <div class="form-group">
     <div class="col-lg-12 col-md-12 col-sm-12">
      <button type="submit" class="form-control btn btn-success btn-block " name="save">Save</button>
    </div>
    <br>
    <br>

      <center>
      <a style="color: blue;
      font-size: 18px;
      font-family: arial;
      text-shadow: black;
      text-decoration: none; " href="select_election.php"><< Back >></a>
    </center>
    <br>

    
    
    </div>
    <br>


    <br>
    <br>
    
    
  </form>
  </div>

<?php


// initializing variables



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'data');
$results =$db->query ("SELECT * FROM add_can");
?>

<div class="row justify-content-center ">
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
        <th>Short Biography</th>
      <th>Image</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
 

<?php

while ($row = $results->fetch_assoc()):  
?>
<tr>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['position']; ?></td>
  <td><?php echo $row['biography']; ?></td>
  <td><?php echo $row['image']; ?></td>
  <td>
    <a href="create_poll.php?edit= <?php echo $row['id']; ?>"
    class = "btn btn-info" >Edit</a>
     <a href="process.php?delete = <?php echo $row['id']; ?>"
    class = "btn btn-danger" >Delete</a>
  </td>
</tr>

<?php
endwhile;
?>
<?php
//pre_r ($results);

//pre_r ($results->fetch_assoc());


function pre_r ($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

?>
</table>
</div>
</div>


  


  </center>
  

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