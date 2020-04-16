<?php 
session_start();
 
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'register');
$Index = $_POST['index'];
$Institution = $_POST['institution'];
$s = "select * from users_table where Index_number ='$Index'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1)
{
	echo "<script>alert('User already taken login')</script>";

	echo "<script>window.open('V_login_signup.php','_self')</script>";
 }
 else{
 	$reg = "insert into users_table(Index_number, Institution) values ('$Index', '$Institution')";
 	mysqli_query($con, $reg);
 	header('Location:V_login_signup.php');
 }

 
 ?>
