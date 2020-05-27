<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "location";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['yes'])) {

// sql to delete a record
$sql = "TRUNCATE TABLE excel";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully!!";

} else {
  echo "Error deleting record: " . $conn->error;
}
}
if (isset($_POST['no'])) {
   header('location: welcome.html');

}
$conn->close();
?>