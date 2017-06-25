<?php
include ("conexion.php");
include ("control_sesion.php");
include ("datos_usuario.php");


	if (isset($_POST['1'])
		and $_POST['1']!= "" 
		and $_POST['2']!= ""
		and $_POST['3']!= ""
		and $_POST['4']!= ""
		and $_POST['5']!= ""
		and $_POST['6']!= ""
		and $_POST['7']!= ""
		and $_POST['8']!= ""
		and $_POST['9']!= ""
		and $_POST['10']!= ""
		and $_POST['11']!= ""
		and $_POST['12']!= ""
		and $_POST['13']!= "") {

		$num1=$_POST['1'];
		$num2=$_POST['2'];
		$num3=$_POST['3'];
		$num4=$_POST['4'];
		$num5=$_POST['5'];
		$num6=$_POST['6'];
		$num7=$_POST['7'];
		$num8=$_POST['8'];
		$num9=$_POST['9'];
		$num10=$_POST['10'];
		$num11=$_POST['11'];
		$num12=$_POST['12'];
		$num13=$_POST['13'];

		$keys=[$num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12,$num13];
		

		$contador=0;
		for ($i=0; $i <13 ; $i++) { 
			$consulta_usuario="SELECT * FROM nivel_keys";
		$resultado=mysqli_query($conexion,$consulta_usuario);
			
			while($fila=mysqli_fetch_assoc($resultado)){
			//echo "consulto";
				if($fila['nombre_key']==$keys[$i] ){
					$contador++;
				}
			}		
		}

		if ($contador==13) {
			$bandera=false;
			$consulta_usuario="SELECT * FROM ganadores";
			$resultado=mysqli_query($conexion,$consulta_usuario);
			while($fila=mysqli_fetch_assoc($resultado)){
				//echo "consulto";
				if($fila['id_usuario']==$id ){
					$bandera=true;
				}
			}

			if($bandera==false){
				//echo "consulto1";

				//realizo la insercion en la BD de los datos ingresados por el usuario
				$consulta="INSERT INTO ganadores SET id_usuario='$id', usuario_g='$usuario'";
				//para realizar la consutla
				mysqli_query($conexion,$consulta);

		

			}
			    $bandera1=false;
				$consulta_usuario1="SELECT * FROM niveles_completos";
				$resultadoq=mysqli_query($conexion,$consulta_usuario1);
				while($filaw=mysqli_fetch_assoc($resultadoq)){
					//echo "consulto";
					if($filaw['id_usuario']==$id and $filaw['id_nivel']=="16" ){
						$bandera1=true;
					}
				}

				if($bandera1==false){
					//echo "consulto1";

					//realizo la insercion en la BD de los datos ingresados por el usuario
					$consultaa="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='16'";
					//para realizar la consutla
					mysqli_query($conexion,$consultaa);

					

				}
			header("location: winner.php ");
		}else{
			$consulta="INSERT INTO locked SET id_usuario='$id', url='joker.php'";
                    //para realizar la consutla
                    mysqli_query($conexion,$consulta);
			header("location: cerrar_sesion.php?id_usuario= $id ");
		}

		




	}else{
		$consulta="INSERT INTO locked SET id_usuario='$id', url='joker.php'";
                    //para realizar la consutla
                    mysqli_query($conexion,$consulta);

		header("location: cerrar_sesion.php?id_usuario= $id ");
	}




 ?>