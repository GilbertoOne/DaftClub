<?php include('session.php'); ?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Cambiar foto de perfil</title>
</head>

    <body style="background-color: #333333">
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					
          <div class="row">
      <div class="col-md-2">

		<center><img class="pp" src="<?php echo $image; ?>" height="300" width="300" style="margin:10px;"></center>
		
		<a class="btn btn-success" href="change_pic.php">Cambiar foto de perfil</a>
      </div>
		<div class="col-md-5">
			<hr>
			<p>Información personal</p>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch_assoc();
			$id = $row['id_miembro'];
			?>
			
			<p>Nombre:<?php echo $row['nombre']." ".$row['apellido']; ?><span class="margin-p"></p>
			<hr>
			<hr>
		</div>
      <div class="col-md-5">
			<form  id="upload_image"  class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div class="control-group">
					<label class="control-label" for="input01">Imagen:</label>
					<div class="controls">
						<input type="file" name="image" class="font" required>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" name="submit" class="btn btn-success" style="color:#111111">Cargar</button>
					</div>
				</div>
			</form>
							<?php
	if (isset($_POST['submit'])) {
 
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
 
		move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
		$location = "images/" . $_FILES["image"]["name"];
		$conn->query("update miembros set imagen = '$location' where id_miembro  = '$session_id' ");
	?>
	<script>
		window.location = 'home.php';
	</script>
	<?php
	}
	?>
      </div>
  </div>
</div>
        
    </body>
</html>