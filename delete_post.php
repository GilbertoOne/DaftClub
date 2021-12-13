<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("delete from post where id_post='$get_id'");
header('location:home.php');
?>