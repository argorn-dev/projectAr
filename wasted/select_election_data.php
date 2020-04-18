<?php
session_start();


// initializing variables
$election = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'election');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $election = mysqli_real_escape_string($db, $_POST['election']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($election)) { array_push($errors, "Election Name is required"); }
 
  
  // first check the database to make sure 
  // a user does not already exist with the same namename and/or email/or momo number
  $user_check_query = "SELECT * FROM create WHERE election ='$election' LIMIT 1";

  

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['election'] === $election) {
      array_push($errors, "Election already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {
    // $position = md5($position);//encrypt the position before saving in the database

    $query = "INSERT INTO create (election) VALUES ('$election)";

    mysqli_query($db, $query);
    $_SESSION['election'] = $election;
    $_SESSION['success'] = "You are now logged in";
    header('location: create_poll.php');
  }
}

// ... 
// LOGIN USER





?>