        
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand"> Inicio</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="profile.php">Perfil</a></li>
        <li><a href="canciones.php">Canciones</a></li>
		<li><a href="message.php">Mensajes</a>
        </li>
        <li>
          <a href="logout.php">Cerrar Sesión</a>
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