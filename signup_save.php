
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$conn->query("insert into miembros (username,password,nombre,apellido,genero,imagen) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg')");	
?>
<script>
	alert('Registrado con éxito');
	window.location = 'index.php';
</script>
</body>
</html>