<?php
include('config.php');
if (!isAdmin()) {
    $_SESSION['msg'] = "Access Denied";
    header('location: index.php');
}
 require 'view.view.php';