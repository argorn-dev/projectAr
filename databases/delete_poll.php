<?php
	$db = mysqli_connect('localhost', 'root', '', 'data');
	if (isset($_GET['id'])) {
	  $id = $_GET['id'];
	  mysqli_query($db, "DELETE FROM add_can WHERE id='$id'");
	  header('location: see_poll_candidates.php');
	}
?>