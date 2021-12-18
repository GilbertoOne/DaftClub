<?php
include('dbcon.php'); 
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}
$session_id = $_SESSION['id'];
$session_query = $conn->query("select * from miembros where id_miembro = '$session_id'");
$user_row = $session_query->fetch_assoc();
$username = $user_row['nombre']." ".$user_row['apellido'];
$image = $user_row['imagen'];
?>