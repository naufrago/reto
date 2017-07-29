<?php
	/*datos necesarios para la conexion
	$db_host="localhost";//direccion del serviedor
	$db_nombre="bd_reto";//nombre de la BD
	$db_usuario="root";//"root" por defecto en local
	$db_contra="";//en local es vacia por defecto*/

	$db_host="mysql.webcindario.com";//direccion del serviedor
	$db_nombre="securitychall";//nombre de la BD
	$db_usuario="securitychall";//"root" por defecto en local
	$db_contra="securitychallreto123";//en local es vacia por defecto

	//sentecia para conectar la BDD a la WEB
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

	//para encontrar error en la conexion
	if(mysqli_connect_errno()){
		echo "FALLO AL CONECTAR CON LA BD<br>";
		//para que salga del codigo PHP
		exit();
	}

?>