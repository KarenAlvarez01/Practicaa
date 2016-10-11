<?php
	$mysqli=new mysqli("localhost","karen","","phpybds");
	if(mysqli_connect_errno()){
		echo 'Conexion fallida:', mysqli_connect_error();
		exit();
	}
	mysqli_set_charset($mysqli, "utf8");//Ubica las tildes a los registros
?>