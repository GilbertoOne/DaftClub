
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$musicgender = $_POST['musicgender'];

$conn->query("insert into miembros (username,password,nombre,apellido,genero,imagen,genero_musical,fecha_nac,status) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg','$musicgender','','')");	
?>
<script>
	alert('Registrado con éxito');
	window.location = 'index.php';
</script>
</body>
</html>