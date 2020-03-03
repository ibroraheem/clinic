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
$sql = "SELECT * FROM user ORDER BY firstname ASC";
$result = mysqli_query($db, $sql);
if (!isAdmin()) {
    $_SESSION['msg'] = "Access Denied";
    header('location: index.php');
}

 require 'views/view.view.php';