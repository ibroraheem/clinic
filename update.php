<?php
include('config.php');

if(isset($_POST['update_btn'])){
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    
    mysqli_query($db, "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email', role ='$role' WHERE id='$id'");
    $_SESSION['message'] = 'Record Updated Succesfully';
    header("location: view.php");
}
