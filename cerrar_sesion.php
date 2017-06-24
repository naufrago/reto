<?php
	include ("conexion.php");
	session_start();
	session_unset();
	session_destroy();
	$idterminar=$_GET['id_usuario'];

	header("location: index.php?status=2");

?>
