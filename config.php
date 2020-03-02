<?php 
session_start();


$db = mysqli_connect('localhost', 'root', '', 'login');

$id = ""; $firstname = ""; $lastname = ""; $email    = ""; $role = ""; $errors   = array(); 




function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}







