<?php
	session_start();
	//para validar que existan variables de sesion
	if($_SESSION['tipo']==2 || !$_SESSION['tipo'] ){
		header("location:indexreto.php");
	}
?>