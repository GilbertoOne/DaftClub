<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<div class="col" id="left-bar">
      <div class="col-md-2">
		<img class="pp" src="<?php echo $image; ?>" height="160" width="160">
		<br>
		<a class="btn btn-success" href="change_pic.php">Cambiar Foto de Perfil</a>
      </div>
		<div class="col-md-5">
			<p>Perfil</p>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch();
			$id = $row['id_miembro'];
			?>
			<p>Nombre: <?php echo $row['nombre']." ".$row['apellido']; ?><span class="margin-p"> </span></p>
		</div>
		<hr>
      <div class="col-md-5">
			<form method="post" action="post.php">
						<textarea name="content" placeholder="Haz tus sugerencias aquí"></textarea>
						<br>
						<hr>
						<button class="btn btn-success">Compartir </button>
			</form>
      </div>
    </div> 