<?php
include('config.php');

$sql = "DELETE FROM user WHERE firstname=$firstname";

if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

mysqli_close($db);