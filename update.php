<?php

include('config.php');
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM user WHERE id=$id");

    if (count($record) == 1) {
        $n = mysqli_fetch_array($record);
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $role = $_POST['role'];
    }
}
	
