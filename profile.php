  
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
				<div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Cambiar Foto de Perfil</a>
      </div>
		<div class="col-md-10">
			<hr>
			<div class="pull-right"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Editar</a></div>
			<p>Información Personal
			
			</p>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch();
			$id = $row['id_miembro'];
			?>
			<hr>
			<p>Nombre: <?php echo $row['nombre']." ".$row['apellido']; ?><span class="margin-p"> </span></p>
			<hr>
			<hr>
			<p>Género: <?php echo $row['genero']; ?></p>
						<hr>
			<p>Fecha de Nacimiento: <?php echo $row['fecha_nac']; ?></p>
						<hr>
			<p>Género musical: <?php echo $row['genero_musical']; ?></p>
						<hr>
			<p>Estado: <?php echo $row['status']; ?></p>
						<hr>
				<p>Username: <?php echo $row['username']; ?></p>
			<hr>
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