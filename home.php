<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
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
        while($row = $query->fetch_assoc()){
        $posted_by = $row['nombre']." ".$row['apellido'];
        $posted_image = $row['imagen'];
        $id = $row['id_post'];
        $link = $row['link'];
        ?>
                <div class="col-md-2 col-sm-3 text-center">
                <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
                </div>
                <div class="col-md-10 col-sm-9">
                    <div class="alert"><?php echo $row['contenido']; ?></div>
                    <div class="alert"><?php echo $link; ?>
                    <?php 
    
    
    $link = substr($link, strpos($link, "=")+1);
    
     ?>
      <iframe id="player" type="text/html" width="640" height="360"
  src="http://www.youtube.com/embed/<?php echo $link ?>?enablejsapi=1&origin=http://example.com" 
  frameborder="0"></iframe>
  <br>
    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    // Search for a specified string.
    </script>
                    </div>
                <div class="row">
                    <div class="col-xs-9">
                    <h4><span class="label label-info"> <?php echo $row['fecha_post']; ?></span></h4><h4>
                    <small style="font-family:courier,'new courier';" class="text-muted">Posteado por:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                    </h4></div>
                    <br><div class="col-xs-3"><a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-trash"></i> Borrar</a></div>
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