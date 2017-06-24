<?php
	session_start();
	//para validar que existan variables de sesion
	if(!$_SESSION['user']){
		header("location:index.php");
	}
?>
