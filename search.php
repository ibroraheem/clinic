<?php
include('config.php');

$output = '';
if(isset($_POST['search'])){
    $search = $_POST['search'];
    $sql = mysqli_query($db, "SELECT * FROM user WHERE id LIKE '$search' OR firstname LIKE '$search' OR lastname LIKE '$search' OR email LIKE '$search' LIKE role = '$search'");
    $count = mysqli_num_rows($sql);
    if ($count >0){
        while ($row = mysqli_fetch_array($sql)) {
            $row['id'];
            $row['firstname'];
            $row['lastname'];
            $row['email'];
            $row['role'];
        }
    }else {
        $message = "There is No Employee with Such Details";
        echo $message;
        }

    }
require 'views/searchresults.view.php';