<?php
include('dbcon.php');
$member_id = $_POST['id_miembro'];
$username = $_POST['username'];
$firstname = $_POST['nombre'];
$lastname = $_POST['apellido'];
$gender = $_POST['genero'];
$genero_music = $_POST['genero_musical'];
$birthdate = $_POST['fecha_nac'];
$status = $_POST['status'];
$password = $_POST['password'];

$conn->query("update miembros set username = '$username',nombre = '$firstname',apellido='$lastname',genero='$gender',
fecha_nac='$birthdate',genero_musical='$genero_music',status='$status',password='$password' where id_miembro = '$member_id'
");

?>
<script>
	window.location = 'edit_profile.php<?php echo '?id='.$member_id; ?>';
</script>