<?php
include('config.php');

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM user WHERE id=$id");
	$_SESSION['message'] = "Staff Record deleted!"; 
	header('location: view.php');
}
