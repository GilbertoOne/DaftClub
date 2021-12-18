
<?php include('session.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Editar Perfil</title>
</head>    
    <body style="background-color:#333333;">
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<button class="btn btn-success">Cambiar Foto de Perfil</button>
      </div>
		<div class="col-md-10">
			<?php
	$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
	$row = $query->fetch_assoc();
	$id = $row['id_miembro'];
	?>
	<hr>
	<form method="post" action="save_edit.php">
	<input type="hidden" name="id_miembro" value="<?php echo $id; ?>">
	Usuario:<input type="text" name="username" value="<?php echo $row['username']; ?>">
	<hr>
	Nombre:<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
	<hr>
	Apellido:<input type="text" name="apellido" value="<?php echo $row['apellido']; ?>">
	<hr>
	Género:
	<select name="genero" style="color:#111111">
		<option><?php echo $row['genero']; ?></option>
		<option>Hombre</option>
		<option>Mujer</option>
	</select>
	<hr>
	Fecha de Nacimiento:<input name="fecha_nac" type="text" value="<?php echo $row['fecha_nac']; ?>">
	<hr>
	Género musical:
	<select name="genero_musical" style="color:#111111">
		<option><?php echo $row['genero_musical']; ?></option>
            <option>Rock</option>
            <option>Pop</option>
            <option>Electrónica</option>
            <option>Boleros</option>
	</select>
	<hr>
	Estado:<input name="status" type="text" value="<?php echo $row['status']; ?>">
	<hr>
	Password:<input name="password" type="text" value="<?php echo $row['password']; ?>">
	<hr>
	<br>
			<center>
			<button name="save" class="btn edit">Guardar</button>
			</center>
	<br>
	<form>
		</div>

    </div> 
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>   
    </body>
</html>