    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Cambiar Foto de Perfil</a>
      </div>
		<div class="col-md-5">
			<hr>
			<p>Perfil</p>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch_assoc();
			$id = $row['id_miembro'];
			?>
			<hr>
			<p>Nombre: <?php echo $row['nombre']." ".$row['apellido']; ?><span class="margin-p"> </span></p>
			
		</div>
      <div class="col-md-5">
			<form method="post" action="post.php">
						<textarea name="content" placeholder="Haz tus sugerencias aquí"></textarea>
						<textarea name="link" placeholder="Ingresa el link"></textarea>
						<br>
						<hr>
						<button class="btn btn-success">Compartir </button>
			</form>
      </div>
    </div> 