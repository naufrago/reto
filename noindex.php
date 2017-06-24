<?php
error_reporting(0);
	session_start();
	//para validar que existan variables de sesion
	if($_SESSION['tipo']==2){
		header("location:indexreto.php");
	}
	if($_SESSION['tipo']==1){
		header("location:panel_administrador.php");
	}

	
?>