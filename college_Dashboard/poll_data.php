<?php
session_start();


// initializing variables
$poll = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'poll_data');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $poll = mysqli_real_escape_string($db, $_POST['poll']);
 
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($poll)) { array_push($errors, "Poll's name is required"); }
  
  

  $user_check_query = "SELECT * FROM add_poll WHERE poll='$poll' LIMIT 1";

  

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['poll'] === $email) {
      array_push($errors, "Poll already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {
    // $position = md5($position);//encrypt the position before saving in the database

    $query = "INSERT INTO  add_poll (poll) VALUES ('$poll')";

    mysqli_query($db, $query);
    $_SESSION['poll'] = $poll;
    $_SESSION['success'] = "You are now logged in";


    header('location: create_candidate.php');
   
   $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
}else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';


  }
  
}





?>



