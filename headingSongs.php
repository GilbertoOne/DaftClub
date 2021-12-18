<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<div>
      <div class="col-md-2" style="margin:10px;">
		<img class="pp" src="<?php echo $image; ?>" height="200" width="200">
		<br>
      </div>
		<div class="col-md-5">
			<p>Canciones posteadas por: </p>
				<?php
			$query = $conn->query("select * from miembros where id_miembro = '$session_id'");
			$row = $query->fetch_assoc();
			$id = $row['id_miembro'];
			?>
			<p> <?php echo $row['nombre']." ".$row['apellido']; ?><span class="margin-p"> </span></p>
		</div>
		<hr>
      <div class="col-md-5">
      </div>
    </div> 