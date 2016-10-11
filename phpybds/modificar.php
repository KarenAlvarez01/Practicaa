<?php
  require('inc/conexion.php');

  $id = $_GET['id'];
  $consulta="SELECT * FROM trabajos where id = '$id'";
  $resultado=$mysqli->query($consulta);
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>titulo del sitio</title>
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
		<div class="container">
			<div class="col s12 center">
			<h3>Modificar Registro</h3>
			  <?php while ($fila=$resultado->fetch_assoc()){ ?>
				   <form action="inc/modificar.php" method="post" class="col s12">
      <div class="row">
       <div hidden class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" name="id" value="<?php echo $fila ['id']; ?>" class="validate">
          <label for="icon_prefix">Nombres</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" name="nombre" value="<?php echo $fila ['nombre']; ?>" class="validate">
          <label for="icon_prefix">Nombres</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">spellcheck</i>
          <input id="icon_telephone" type="tel" name="titulo" value="<?php echo $fila ['titulo']; ?>" class="validate">
          <label for="icon_telephone">Titulos</label>
        </div>
      </div>
      <?php } ?>
			<div class="row">
				<div class="container">
					<div class="col s8"></div>
					<div class="col s4">
					  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
			
							</div>
							
     		</div>
					
				</div>
		
        
    </form>

			</div>
		</div>
			
		</div>

		 
		
	</body>
	  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
	<script >

			 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
         
	</script>

</html>