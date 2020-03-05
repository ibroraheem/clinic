<?php
$db = mysqli_connect('localhost', 'root', '', 'login');

if(isset($_POST['search'])){
    $search = mysqli_real_escape_string($db, $_POST['search']);
    $sql = "SELECT * FROM user WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR email LIKE '%$search%' OR role LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);

    if($queryResult > 0){
        while($row = mysqli_fetch_assoc($result)){
            $row['id']; 
            $row['firstname']; 
			$row['lastname'];
            $row['email']; 
			$row['role']; 
        }
    } else{
        echo "There is no Employee with such detail";
    }
}
require 'views/searchresults.view.php';