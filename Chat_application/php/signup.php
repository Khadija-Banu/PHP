<?php
include "connect.php";

$user_name=mysqli_real_escape_string($dsn, $_POST['user_name']);
$user_email=mysqli_real_escape_string($dsn, $_POST['user_email']);
$user_password=mysqli_real_escape_string($dsn, $_POST['user_password']);

?>