

<?php
include ("conexion.php");

set_error_handler("myFunctionErrorHandler", E_WARNING);
function myFunctionErrorHandler($errno, $errstr, $errfile, $errline)
{
    /* Según el típo de error, lo procesamos */
    switch ($errno) {
       case E_WARNING:
                
			    header('location: login.php?status=1');
                return true;
                break;
            
            case E_NOTICE:
                header('location: login.php?status=1');
                return true;
                break;
            
            default:
                /* Ejecuta el gestor de errores interno de PHP */
                return false;
                break;
            }
    }

//capturo los datos de la matriz POST
$email=$_POST['user'];
$password=$_POST['password'];


//para validar con la variable encriptada
$passwordmd5=md5($password);

if(isset($email)){
	//consulto si el email y la contraseña existen en la base de datos
	$consulta="SELECT * FROM usuario WHERE user='$email' AND password='$passwordmd5' ";
	$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error());

	//guardar todos los valores de la matriz obtenida en resutlado
	$fila=mysqli_fetch_assoc($resultado);

	if(!$fila['id_usuario']){
		//en el caso de que el usuario no exista
		header('location: login.php?status=1');
    //echo ("EL usuario NO EXISTE");
	}else{


			//si existe entonces se crea una sesion privada para el usaurio
			//estas variables permiten controlar lo que se le muestra al usuario que entro a la sesion
			session_start();
			//$_SESSION es una varibale de tipo matriz
			// es decir $_SESSION['id_usuario'] es una varibale nueva
			$_SESSION['id']=$fila['id_usuario'];
			$_SESSION['nombre']=$fila['nombre'];
			$_SESSION['tipo']=$fila['tipo'];
			$_SESSION['user']=$fila['user'];


			
				//para realizar la consutla
				mysqli_query($conexion,$consulta_n);
				mysqli_close($conexion);
			//redirecciono al menu correspomndiente
			if($fila['tipo']==1){
				header('location: panel_administrador.php');
			}else if($fila['tipo']==2){
				header('location: indexreto.php?status=6');
			}
		}


	

}else{

	header('location: login.php?status=1');
}

?>
