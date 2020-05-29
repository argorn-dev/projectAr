<?php
if(isset($_POST["submit"]))
{

                $url='localhost';
                $username='root';
                $password='';
                $conn=mysqli_connect($url,$username,$password,"location");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
      }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          $name = $filesop[0];
          $index_number = $filesop[1];
          $email = $filesop[2];
          $password = $filesop[3];
          $college = $filesop[4];
          $sql = "insert into excel(name,index_number,email,password,college) values ('$name','$index_number','$email','$password','$college')";
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
           }

            if($sql){
               echo "Students imported successfully..";
              
             } 
     else
     {
            echo "Sorry! Unable to import";
          }

}

// adding a student to the database....


$name = "";

$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'location');

// REGISTER USER
if (isset($_POST['sub'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
 
  $index_number = mysqli_real_escape_string($db, $_POST['index_number']);

  $email= mysqli_real_escape_string($db, $_POST['email']);

  $password = mysqli_real_escape_string($db, $_POST['password']);

  $college = mysqli_real_escape_string($db, $_POST['college']);

  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Candidate's name is required"); }
  
  if (empty($index_number)) { array_push($errors, "Candidates's index_number is required"); }

  if (empty($email)) { array_push($errors, "Candidate's email is required"); }

  if (empty($password)) { array_push($errors, "Candidate's password is required"); }

  if (empty($college)) { array_push($errors, "Candidate's college is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same namename and/or email/or momo number
  $user_check_query = "SELECT * FROM excel WHERE index_number='$index_number' LIMIT 1";

  

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

    $query = "insert excel(name,index_number,email,password,college) values ('$name','$index_number','$email','$password','$college')";

    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";


    header('location: students.php');
   
   echo '<script type="text/javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
  exit;
}else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';


  }
  
}


?>









