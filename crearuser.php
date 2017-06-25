<?php
include ("conexion.php");

//capturo los datos de la matriz POST
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tipo=2;
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//para encriptar la contraseña
$passwordmd=md5($password);
//para verificar que los campos digitados por el usaurio no esten vacios de manera SERVIDOR

if($password != '' && $apellido != '' && $nombre != '' && $usuario!=''){
	//relizo la consulta para verificar que no hayan emails repetidos
	$bandera=false;
	$consulta_usuario="SELECT * FROM usuario";
	$resultado=mysqli_query($conexion,$consulta_usuario);
	while($fila=mysqli_fetch_assoc($resultado)){
		if($fila['user']==$usuario){
			$bandera=true;
		}
	}

	if($bandera==false){

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO usuario SET nombre='$nombre',apellido='$apellido',tipo='$tipo',password='$passwordmd',user='$usuario'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		//para cerrar la conexion BuTecPro
		mysqli_close($conexion);

		session_start();
		$_SESSION['user']=$usuario;
		$_SESSION['tipo']=$tipo;

    header('location: indexreto.php?status=6');

	}else{

		header('location: registro.php?status=3');
	}


}else{

	//para devolver al formulario de registro si no ingreso todo
	header('location: registro.php?status=3');

}

?>
