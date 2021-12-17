<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Home</title>
</head>
<body style="background-color:#333333" class="fadeClass">
<?php include('navbar.php'); ?>
    <div id="masthead">  
                    <div class="container">
                    <?php include('heading.php'); ?>
                    </div><!-- /cont -->
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="top-spacer"> </div>
                        </div>
                        </div> 
                    </div><!-- /cont -->
                </div>
    <div class="container" id="post-section">
    <div class="row">
        <div class="col-md-12"> 
        <div class="panel">
            <div class="panel-body">
            <!--/stories-->
            <div class="row" >    
                <br>
                <?php
                    $query = $conn->query("select * from post LEFT JOIN miembros on miembros.id_miembro = post.id_miembro order by id_post DESC");
                    while($row = $query->fetch()){
                    $posted_by = $row['nombre']." ".$row['apellido'];
                    $posted_image = $row['imagen'];
                    $id = $row['id_post'];
                ?>
                <div class="col-md-2 col-sm-3 text-center">
                </a>
                </div>
                <div class="col-md-10 col-sm-9" id="stories">
                <div class="col-xs-9" style="text-align:left;">
                <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"><br>
                        <small style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-muted">Posteado por: <a href="#" class="text-muted"><?php echo $posted_by; ?></a></small><br>
                            <span class="label label-info" small style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:small;"> <?php echo $row['fecha_post']; ?></span>
                        </div>
                        <br>
                    <div class="alert"><?php echo $row['contenido']; ?></div>
                    <div class="row">
                    <div class="col-xs-3" style="text-align:right;">
                        <a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger">
                        <i class="icon-trash"></i> Borrar</a></div>
                    </div>
                </div>
                <?php } ?>		
            </div>
            
            </div>
        </div>
                                                                                        
                                                        
                                                        
        </div><!--/col-12-->
    </div>
    </div>
</body>
</html>