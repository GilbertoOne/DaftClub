<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>  
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Tus canciones</title>
</head>
<html>
<?php include('navbar.php'); ?>
    <div id="masthead">  
                    <div class="container">
                    <?php include('headingSongs.php'); ?>
                    </div><!-- /cont -->
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="top-spacer"> </div>
                        </div>
                        </div> 
                    </div><!-- /cont -->
                </div>
  <body   style="background-color:#333333" class="fadeClass">
    
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <?php 
    $query = $conn->query("select * from post where id_miembro = $session_id order by id_post DESC");
    while($row = $query->fetch_assoc()){
      
    $id = $row['id_post'];
    $link = $row['link'];
    
    $link = substr($link, strpos($link, "=")+1);
    
    ?>
      <iframe id="player" type="text/html" width="640" height="360"
  src="http://www.youtube.com/embed/<?php echo $link ?>?enablejsapi=1&origin=http://example.com" 
  frameborder="0"></iframe>
  <br>
  <div class="col-xs-3" style="text-align:center;"> 
  <?php
  if($_SESSION['id']==$row['id_miembro']){?>
    <a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger">
    <i class="icon-trash"></i> Borrar canción posteada</a></div>
  <?php
  }
  ?>                
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
    <?php } ?>
  </body>
</html>