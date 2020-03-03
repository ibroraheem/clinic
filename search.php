<?php
include("config.php");
$output = '';
if(isset($_POST['search'])){
    $search = $_POST['search'];
    $search = preg_replace("#[a-zA-Z]#","", $search);
    $sql = mysqli_query($db, "SELECT * FROM user WHERE `firstname` = $search OR `lastname` = $search OR `email` = $search or `role` = $search");
    $count = mysqli_num_rows($sql);
    if ($count == 0){
        $message = "There is No Employee with Such Details";
        echo $message;
    }else {

    }
}