<?php 
include('config.php');
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'Admin' ) {
		return true;
	}else{
		return false;
	}
}
$sql = "SELECT * FROM user";
$result = mysqli_query($db, $sql);

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
if (isset($_POST['login_btn'])) {
	login();
}

require 'views/home.view.php';