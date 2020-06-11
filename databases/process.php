<?php
session_start();


// initializing variables
$name = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'data');
if ($db->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// REGISTER USER 
if (isset($_POST['save'])) {
  // receive all input values from the form
   $poll = mysqli_real_escape_string($db, $_POST['poll']);

 $name = mysqli_real_escape_string($db, $_POST['name']);
 
 $position = mysqli_real_escape_string($db, $_POST['position']);

   $bio = mysqli_real_escape_string($db, $_POST['bio']);

  $email = mysqli_real_escape_string($db, $_POST['email']);

  $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 

  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   if (empty($poll)) { array_push($errors, "Poll is required"); }

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
      array_push($errors, "name already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) === 0) {
    // $position = md5($position);//encrypt the position before saving in the database


   /** $query = "insert add_can(poll,name, position,biography,email,image) values ('$poll',$name' ,'$position','$bio','$email','$image')"; **/

      $query = "insert add_can(poll,name,position,biography,email,image) values ('$poll','$name','$position','$bio','$email','$image')";
    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";


    
  echo "<div class='alert alert-success' role='alert'>
            Candidate Successfully Added to Database
        </div>";

}else {
        
    echo "<div class='alert alert-danger' role='alert'>
            Candidate Unable! to Add to Database
        </div>";
}

 
  
}


if (isset($_POST['go'])) {

// sql to delete a record
$quey = mysql_query("SELECT COUNT(poll) FROM category WHERE poll = '$poll" . mysql_real_escape_string($_GET['poll']) . "'");
$row = mysql_fetch_array($quey);
if ($row[0]) {
  echo "here is an element with the same name";

}



}
$db->close();
?>