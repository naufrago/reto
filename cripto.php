<!DOCTYPE html>
<html>
<title>Reto-nivel 1.2</title>
<script type="text/javascript">
function alerta(){
  var a="<?php echo alertcrypto(); ?>";
  alert(a);
 
}
</script>


<?php include "head.php"; ?>
<?php include ("control_sesion.php");
include ("datos_usuario.php");
?>
<body>
<?php include "nav.php"; ?>
<?php
    $bandera=false;
	$consulta_usuario="SELECT * FROM niveles_completos";
	$resultado=mysqli_query($conexion,$consulta_usuario);
	while($fila=mysqli_fetch_assoc($resultado)){
		//echo "consulto";
		if($fila['id_usuario']==$id and $fila['id_nivel']=="3" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='3'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>

<!--PUEDE SER DE UTILIDAD en la url.... encriptar.php -->



<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>que bien has pasado a un nuevo nivel  pero recuerda nada es lo que parece... </center>
          </div>


    <center><h1>c2VndXJhbWVudGUrZGViZXMrZXN0YXIrcGVuc2FuZG8rc<br>XVlK2NsYXNlK2RlK2J1cmxhK2VzK2VzdGElMkMrcG<br>VybytpbnRlbnRhbG8rbm8rZGViZStkZStzZXIrdGFuK2RpZml<br>jaWwrcGFyYSt1c3RlZC4uLitvK3NpK2xvK2VzJTNGKw==</h1></center>

    
    <button class="btn btn-success"  onclick="alerta()" >que dice ?</button>
    

    <?php 
    function alertcrypto()
    {
      $cadena='c2VndXJhbWVudGUrZGViZXMrZXN0YXIrcGVuc2FuZG8rcXVlK2NsYXNlK2RlK2J1cmxhK2VzK2VzdGElMkMrcGVybytpbnRlbnRhbG8rbm8rZGViZStkZStzZXIrdGFuK2RpZmljaWwrcGFyYSt1c3RlZC4uLitvK3NpK2xvK2VzJTNGKw==';
     $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     $decrypted = urldecode(base64_decode($cadena));
     echo "".$decrypted;
    } ?>

      <form action="cripto.php" method="post">
      en algun momento se dio una key en alguno de los niveles este es el momento de utilizarla 
    <input type="text" name="data" id="data">
    <button class="btn btn-success"   type="submit">validar key</button>
    </form>


    <?php

    if(isset($_POST['data']))
      {
        $cadena=$_POST['data'];
        $con="SELECT * FROM nivel_keys WHERE id_key='3'";
        $resul=mysqli_query($conexion,$con);
        while($fila=mysqli_fetch_assoc($resul)){
          if ($cadena==$fila['nombre_key']) {
          ?>
          <br><br>
          <div class="alert alert-success alert-dismissable">
                  <center>esto se pone mejor parece que desencriptaste un nuevo nivel  </center>
          </div>
          <form action="xssdatatest.php" method="post">
          <input type="hidden" name="crypto" value="<?php echo$nombre;echo "$cadena";?>">
          <button class="btn btn-success"   type="submit">siguiente nivel</button>
            
          </form>

          <?php
        }


        }

        
       //para cerrar la conexion BuTecPro
    mysqli_close($conexion); 

      }
?>
    
    

    

    

	</section>
  <div><div><div><div><!-- hay trojanos que utilizan el puerto 1243 tenlo en cuenta --></div></div></div></div>
</section>
 

</body>

<?php include "script.php"; ?>
</html>