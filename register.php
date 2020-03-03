<?php include('config.php'); 

// if (!isAdmin()) {
//     $_SESSION['msg'] = "Access Denied";
//     header('location: login.php');
//}
function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
if (isset($_POST['register_btn'])) {
	register();
}


function register(){
	
	global $db, $firstname, $errors, $email;

	
	$firstname       =  e($_POST['firstname']);
	$lastname      =  e($_POST['lastname']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	
	if (empty($firstname)) { 
		array_push($errors, "Firstname is required"); 
	}
	if (empty($lastname)) { 
		array_push($errors, "Lastname is required"); 
	}
	
	
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

			
	if (count($errors) == 0) {
		$password = md5($password_1);
		if (isset($_POST['role'])) {
			$role = e($_POST['role']);
			$query = "INSERT INTO user (firstname, lastname,  email, role,  password) 
					  VALUES('$firstname', '$lastname', '$email', '$role', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO user (firstname, lastname,  email, role,  password) 
					  VALUES('$firstname', '$lastname', '$email', '$role',  '$password')";
			mysqli_query($db, $query);

			
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); 
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
		}
	}
}

require 'views/register.view.php';    