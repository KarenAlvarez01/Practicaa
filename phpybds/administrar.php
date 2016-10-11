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
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>
		
		<div class="row">
		<div class="container">
			<div class="col s12 center">
				  <table>
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="nombre">nombre</th>
              <th data-field="titulo">titulo</th>
              <th data-field="operaciones">operaciones</th>
            


          </tr>
        </thead>

        <tbody>
        <?php while($fila=$resultado->fetch_assoc()){ ?>
          <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['titulo']; ?></td>
              <td>  <a  href="modificar.php?id=<?php echo $fila['id'];?>" class=" btn"  >Modificar</a> 
     <a  class=" btn"  href="inc/eliminar.php?id=<?php echo $fila['id'];?>" >Eliminar</a> </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

			</div>
		</div>
			
		</div>

		  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
        <div class="row">
    <form action="inc/ingresar.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" name="nombre" class="validate">
          <label for="icon_prefix">Nombres</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">spellcheck</i>
          <input id="icon_telephone" type="tel" name="titulo" class="validate">
          <label for="icon_telephone">Titulos</label>
        </div>
      </div>
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
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
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