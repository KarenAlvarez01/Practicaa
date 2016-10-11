<?php
  require('conexion.php');
  $id=$_GET['id'];

  $consulta="DELETE FROM trabajos WHERE id='$id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../administrar.php"); 
  exit(); 
?>