<!DOCTYPE html>
<html>
  <body>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <?php 
    $link[0] = "iOOK_sw9d7Y";
    $link[1] = "zm9hb03dvaw";
    $link[2] = "cpvC8_NMXmU";
    $variable = "https://www.youtube.com/watch?v=cpvC8_NMXmU";
    $variable = substr($variable, strpos($variable, "=")+1);
    echo "$variable <br>";
    for($i=0;$i<3;$i++){ ?>
      <iframe id="player" type="text/html" width="640" height="360"
  src="http://www.youtube.com/embed/<?php echo $link[$i] ?>?enablejsapi=1&origin=http://example.com" 
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
   <?php } ?>
  </body>
</html>