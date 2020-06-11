<?php include('process.php') ?>
 <?php
 $db = mysqli_connect('localhost', 'root', '', 'data');
 if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM add_can WHERE id=$id LIMIT 1");

    
      $n = mysqli_fetch_array($record);

      $poll = $n['poll'];

      $name = $n['name'];
     
      $position = $n['position'];

      $bio = $n['biography'];

      $email = $n['email'];

     

    
  }
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $poll = $_POST['poll'];


 
 $position = $_POST['position'];

   $bio = $_POST['bio'];

  $email = $_POST['email'];

  $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 


  mysqli_query($db, "UPDATE add_can SET name='$name', poll = '$poll', position = '$position', biography = '$bio', email =
  '$email', image = '$image' WHERE id=$id");
  $_SESSION['message'] = "Candidate updated!"; 
  header('location: see_poll_candidates.php');
}
  ?>

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

<body>

<div class="container-fluid col-6" ">

<br>
<br>
<h3 align="center" style="color: green">EDIT CANDIDATE</h3>
<form method="POST" action="edit_candidate.php" enctype="multipart/form-data" >



        <?php

$db = mysqli_connect('localhost', 'root', '', 'poll_data');
$results =$db->query ("SELECT * FROM add_poll");
?>


<div class="form-group">
    <select class="form-control" name="poll" value="<?php echo $poll; ?>"  >
    <?php

while ($row = $results->fetch_assoc()): 

?>
      
           <option value="<?php echo $row['poll']; ?>"><?php echo $row['poll']; ?></option>
           
        <?php
endwhile;
?>
   
    </select >
  </div>
<hr> 
<br>


<?php 
//pre_r ($results);

//pre_r ($results->fetch_assoc());


function pre_r ($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

?> 
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
      <label>Enter Candidate's name</label>
      <center>

      <input type="text" placeholder="Enter name" name="name" class="form-control form-control-user" value="<?php echo $name; ?>"> 
      </center>
      </div>
      <div class="form-group">
        <label>Enter Candidate's Position</label>
      <center>
      <input type="text" placeholder="Enter Position" name="position" value="<?php echo $position; ?>" class="form-control form-control-user" >
      </div>
      <div class="form-group">
    <label for="email">Enter Candidate's Email Address</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Candidate's Email Address" aria-describedby="emailHelp">
   </div>
      <div class="form-group">
        <label>Enter Short Biography of Candidate</label>
      <center>
      <textarea type="text"  placeholder="Enter Short Biography" name="bio" value="<?php echo $bio; ?>" placeholder="Candidate's Biography" class="form-control form-control-user" > </textarea>
      </div>
      <div class="form-group">
        <label>Pick Image of Candidate</label>
      <center>
      <input type="file" placeholder="Pick Image" name="image" class="form-control form-control-user" >
      </div>
      <br>
      <br>
    <div class="text-right">

    <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
</div>
</form>

<br>
<br>
  </div>
      </div>
    
    </div>
      
</body>
</html>