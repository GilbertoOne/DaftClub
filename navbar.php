<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>        
        <header class="navbar navbar-bright navbar-fixed-top" role="banner" >
  <div class="container" style="background-color:#333333">
    <!--<div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only" style="color:#111111; left:100px;">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>-->
    <nav class="collapse navbar-collapse" role="navigation" id="navBarX">
      <ul class="nav navbar-nav" style="list-style-type:none;">
        <li style="display:">
          <div style="cursor:pointer;" onclick="location.href='home.php'" id="InicioBtn" class="navbar-brand">
            <B>Inicio</B>
          </div> 
        </li>
        <li>      
          <div style="cursor:pointer;" onclick="location.href='profile.php'" id="PerfilBtn" class="navbar-brand">
            <B>Perfil</B>
          </div>
        </li>
        <li>
          <div style="cursor:pointer;" onclick="location.href='canciones.php'" id="CancionesBtn" class="navbar-brand">
            <B>Canciones</B>
          </div> 
        </li>
		    <li>
          <div style="cursor:pointer;" onclick="location.href='message.php'" id="MensajesBtn" class="navbar-brand">
            <B>Mensajes</B>
          </div> 
        </li>

        <li>
          <div style="cursor:pointer;" onclick="location.href='logout.php'" id="SalirBtn" class="navbar-brand">
            <B>Cerrar Sesión</B>
          </div> 
        </li>
      </ul>
  
		<div class="pull-right">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control"  id="span5" placeholder="Buscar">
            </form>
		</div>   
    </nav>
  </div>
</header>

