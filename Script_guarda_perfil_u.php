<?php
include ("conexion.php");
include ("control_sesion.php");
include ("datos_usuario.php");

//capturo los datos de la matriz POST
$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$user=$_POST['user'];
$tipo=$_POST['tipo1'];
$password=$_POST['password'];
$password_r=$_POST['password_r'];
$estado=1;
if ($password!="") {
	$passwordmd=md5($password);
}else{
	$passwordmd=$password_r;
}

echo "<script>alert(".$tipo.")</script>";
if($nombre != '' && $apellido != ''&& $passwordmd !=''&& $user!=''){

	$consulta_n="UPDATE  usuario SET nombre='$nombre', apellido='$apellido', user='$user', password='$passwordmd'WHERE id_usuario='$id_usuario'";
	//para realizar la consutla
	mysqli_query($conexion,$consulta_n);

	//para cerrar la conexion BuTecPro
	mysqli_close($conexion);

	//mensaje de confirmacion de EXITO
	//usamos la vairable status ?status
	//si queremos otra variables se ocncantena con &variable2=3

	header("location:indexreto.php?status=8");

}else{
	//para devolver al formulario de registro si no ingreso todo
	header("location:perfil_usuario.php?id_usuario=$id&status=2 ");
}

?>
