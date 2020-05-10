<?php
session_start();


// initializing variables
$name = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'data');

// REGISTER USER
if (isset($_POST['save'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
 
  $position = mysqli_real_escape_string($db, $_POST['position']);

  $bio = mysqli_real_escape_string($db, $_POST['bio']);

  $email = mysqli_real_escape_string($db, $_POST['email']);

  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Candidate's name is required"); }
  
  if (empty($position)) { array_push($errors, "Candidates's position is required"); }

  if (empty($bio)) { array_push($errors, "Candidate's Biography is required"); }

  if (empty($email)) { array_push($errors, "Candidate's email is required"); }

  if (empty($image)) { array_push($errors, "Candidate's image is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same namename and/or email/or momo number
  $user_check_query = "SELECT * FROM add_can WHERE name='$name' LIMIT 1";

  

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {
    // $position = md5($position);//encrypt the position before saving in the database

    $query = "INSERT INTO  add_can (name, position,biography,email,image) VALUES ('$name' ,'$position','$bio','$email','$image')";

    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";


    header('location: create_candidate.php');
   
   $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
}else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';


  }
  
}

// ... 
// LOGIN USER
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $delete_query = "DELETE FROM add_can WHERE id =$id";
  mysql_query($delete_query);
  header('location: create_poll.php');

}




?>



