<?php 
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'register');
$Index = $_POST['index'];
$Institution = $_POST['institution'];
$s = "select * from users_table where Index_number ='$Index' && Institution='$Institution'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1)
{
header('Location:V_login_signup.php');	
 }
 else{
 	header('Location:registration.php');
 }

 
 ?>
