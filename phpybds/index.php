<?php
  require('inc/conexion.php');

  $consulta="SELECT * FROM trabajos";
  $resultado=$mysqli->query($consulta);
?>


	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
			<title>titulo del sitio</title>
			<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
			<link rel="stylesheet" href="css/estilos.css">

		</head>

		<body>


		<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>

		
		<nav class="black">
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">PHPbds</a>
				<!-- activate side-bav in mobile view -->
				<a href="#!" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="administrar.php">Administrador</a></li>
					<!-- Dropdown Trigger -->
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav" id="mobile-demo">
					<li><a href="sass.html">Sass</a></li>
					<li><a href="components.html">Components</a></li>
				</ul>
			</div>
		</nav>
	<div class="row">
	  <?php while($fila=$resultado->fetch_assoc()){ ?>
			
		<div class="col s6">
		 
				<div class="card small teal white-text">
					
					<h5><?php echo $fila['nombre']; ?></h5>
					<hr>
					<h5><?php echo $fila['titulo']; ?> </h5>
				</div>
		
			</div>
			  		<?php } ?>
		</div>

	<!-- Modal Trigger -->
	
	<!-- Modal Structure -->
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4>Ingresar dato</h4>
			<p><div class="row">
			 <form action=class="col s12">
			 <div class="row">
			  <div class="input-field col s12">
			   <input id="first_name" type="text" class="validate" name="nombre">
			    <label for="first_name">Nombre</label>
			    </div>
			    <div class="input-field col s12">
			    <input id="last_name" type="text" class="validate" name="titulo">
			    <label for="last_name">Titulo</label>
			    </div>
			    	
			    </label>
			    </div>
			  </div>
			 </div>
			 </form>
			</div></p>
		
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>