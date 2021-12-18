<?php
include('dbcon.php');
include('session.php');
$content = $_POST['content'];
$link = $_POST['link'];
$conn->query("insert into post (contenido,fecha_post,id_miembro,link) values('$content',NOW(),'$session_id','$link')");
header('location:home.php');
?>