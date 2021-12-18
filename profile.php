  
<?php include('session.php'); ?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Perfil</title>
</head>
    <body style="background-color:#333333;" class="fadeClass">
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
				<div class="row">
      <div class="col-md-2">
		<img class="pp" src="<?php echo $image; ?>" style="margin:10px;" height="200" width="200">
		<br>
		<a class="btn btn-success" href="change_pic.php">Cambiar Foto de Perfil</a>
      </div>
		<div class="col-md-10">
			<p style="text-align:left; font-size: larger;"><b>Información Personal</b></p>
			<hr>
			<div class="pull-right" style="text-align:left; font-size: larger;"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Editar</a></div>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch_assoc();
			$id = $row['id_miembro'];
			?>
			
			<p>Nombre: <?php echo $row['nombre']." ".$row['apellido']; ?><span class="margin-p"> </span></p>

			<p>Género: <?php echo $row['genero']; ?></p>
						
			<p>Fecha de Nacimiento: <?php echo $row['fecha_nac']; ?></p>
						
			<p>Estado: <?php echo $row['status']; ?></p>

			<p style="text-align:left; font-size: larger;"><b>Perfil</b></p>
			<hr>
				<p>Género musical: <?php echo $row['genero_musical']; ?></p>
				<p>Username: <?php echo $row['username']; ?></p>
				<p>Password: <?php echo $row['password']; ?></p>
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