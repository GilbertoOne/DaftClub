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
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Cambiar foto de perfil</a>
      </div>
		<div class="col-md-5">
			<hr>
			<p>Información personal</p>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch();
			$id = $row['id_miembro'];
			?>
			<hr>
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
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>
				<?php
	$query = $conn->query("select * from post LEFT JOIN miembros on miembros.id_miembro = post.id_miembro order by id_post DESC");
	while($row = $query->fetch()){
	$posted_by = $row['nombre']." ".$row['apellido'];
	$posted_image = $row['imagen'];
	$id = $row['id_post'];
	?>
            <div class="col-md-2 col-sm-3 text-center">
             <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
             	<div class="alert"><?php echo $row['contenido']; ?></div>
              <div class="row">
                <div class="col-xs-9">
                  <h4><span class="label label-info"> <?php echo $row['fecha_post']; ?></span></h4><h4>
                  <small style="font-family:courier,'new courier';" class="text-muted">Publicado por:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                  </h4></div>
                <div class="col-xs-3"><a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-trash"></i> Eliminar</a></div>
              </div>
              <br><br>
            </div>
	<?php } ?>		
          </div>
          <hr>
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
        
    </body>
</html>