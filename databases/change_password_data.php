<?php
session_start();

// initializing variables

$email    = "";

$errors = array(); 

$db = new mysqli('localhost', 'root', '', 'college_data');
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
if (isset($_POST['sub'])) {

  // receive all input values from the form
   $email = mysqli_real_escape_string($db, $_POST['email']);

 $password = mysqli_real_escape_string($db, $_POST['password']);
 
 $new_password = mysqli_real_escape_string($db, $_POST['new_password']);

   $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   if (empty($email)) { array_push($errors, "Email is required"); }

 if (empty($password)) { array_push($errors, "Password is required"); }
  
  if (empty($new_password)) { array_push($errors, "New Password is required"); }

  if (empty($confirm_password)) { array_push($errors, "Confirm Password is required"); }

  

//check the new password
               
  if ($new_password!=$confirm_password)
  {
     array_push($errors, "Passwords do Not Match");
   }
//succes
//change password in db
if(count($errors)>0){
  echo "<div class='alert alert-danger' role='alert'>
            Something went wrong
        </div>";
}
else{
  $querychange = "UPDATE login SET password='$new_password' WHERE email='$email' AND password='$password'";
  if ($db->query($querychange ) === TRUE) {
  echo "<div class='alert alert-success' role='alert'>
            Password Changed succesfully..
        </div>";;
      
   
     }
    }

  }

$db->close();

?>