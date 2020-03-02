<?php
include('config.php');
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
$sql = "SELECT * FROM user";
$result = mysqli_query($db, $sql);
if (!isAdmin()) {
    $_SESSION['msg'] = "Access Denied";
    header('location: index.php');
}

function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

 require 'views/view.view.php';