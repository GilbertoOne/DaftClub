<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<div class="col" id="left-bar">
      <div class="col-md-2">
		<img class="pp" src="<?php echo $image; ?>" height="200" width="200">
		<br>
		<div style="cursor:pointer;" onclick="location.href='change_pic.php'" id="FotoPerfil" class="btn btn-success">
            <B>Cambiar foto de perfil</B>
          </div> 
		
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
						<textarea name="content" placeholder="Haz tus sugerencias aquí" style="color: #111111;"></textarea>
						<br>
						<hr>
						<button class="btn btn-success" id="BtnCompartir" style="color:#111111">Compartir </button>
			</form>
      </div>
    </div> 