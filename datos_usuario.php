<?php
	//consultamos los datos del usuario que esta logeado
include ("conexion.php");
	$consulta="SELECT * FROM usuario WHERE user='".$_SESSION['user']."'";
	$resutlado=mysqli_query($conexion,$consulta);
	$fila=mysqli_fetch_assoc($resutlado);

	$id=$fila['id_usuario'];
	$nombre=$fila['nombre'];
	$apellidos=$fila['apellido'];
	$tipo=$fila['tipo'];
	$usuario=$fila['user'];
	$password=$fila['password'];

	//echo "$usuario";

?>
