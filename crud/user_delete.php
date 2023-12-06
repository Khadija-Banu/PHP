<?php
include 'connect.php';

$userId=$_GET['user_id'];
$sql="delete from crud where id=$userId";
$statement=$pdo->prepare($sql);
$statement->execute();
header('location:user_list.php')
?>