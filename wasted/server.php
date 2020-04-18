<?php
session_start();

// initializing variables
$index_number = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'school');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $index_number = mysqli_real_escape_string($db, $_POST['index_number']);
 
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  $list = mysqli_real_escape_string($db, $_POST['list']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($index_number)) { array_push($errors, "index_number is required"); }
  
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same index_numberusername and/or email/or momo number
  $user_check_query = "SELECT * FROM vote WHERE index_number='$index_number' LIMIT 1";

  

  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['index_number'] === $index_number) {
      array_push($errors, "Username already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {
  	// $password_1 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO vote (index_number, password,list) VALUES ('$index_number' ,'$password_1',$list)";

  	mysqli_query($db, $query);
  	$_SESSION['index_number'] = $index_number;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: after_login.php');
  }
}

// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $index_number = mysqli_real_escape_string($db, $_POST['index_number']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($index_number)) { array_push($errors, "index_number is required"); }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM vote WHERE index_number='$index_number' ";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['index_number'] = $index_number;
      $_SESSION['success'] = "You are now logged in";
      header('location: after_login.php');
    }else {
      array_push($errors, "Wrong index_number/password combination");
    }
  }
}
?>



