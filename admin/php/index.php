<?php 
$username = "root";
$dbname = "voting";
$password ="";
$hostname = "localhost";

$con = new mysqli($hostname,$username,$password);

// Check connection


if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully\n";
}
$email = mysqli_real_escape_string($con,$_REQUEST['email']); 
$password = mysqli_real_escape_string($con, $_REQUEST['password']); 

$sql = "SELECT * FROM voting WHERE uid='".$email."'AND upwd='".$password."' limit 1";
$uid = "SELECT upwd FROM voting limit 1";
$uid_result = mysqli_query($con,$uid);
$result=mysqli_query($con,$sql);

    
    if(mysqli_num_rows($result)==1){
        // header('location:../html/home.html');
        echo "successfully logged in";
    }
    else{
        // echo " You Have Entered Incorrect Password";
        // exit();
        // header('location: ../');
        
    }

    echo $uid_result;

 

echo $password;
 ?>