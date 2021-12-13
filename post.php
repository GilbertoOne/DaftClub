<?php
include('dbcon.php');
include('session.php');
$content = $_POST['content'];
$conn->query("insert into post (contenido,fecha_post,id_miembro) values('$content',NOW(),'$session_id')");
header('location:home.php');
?>