<!DOCTYPE html>
<html>
<head>
	<title>conversor hexadecimal </title>
    <?php include "head.php"; ?>
</head>
<body>
<br><center><h1>proceso con hexadecimales</h1></center><br>
<center>
<form method="post" action="conversorhex.php">
<h2>Cadena a encriptar</h2><br>
<input type="text" name="encriptar">
<button class="btn btn-success"   type="submit">encriptar</button>
</form>

<?php

    if(isset($_POST['encriptar']))
      {
        $mensaje1=$_POST['encriptar'];
    $hex='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    for ($i=0; $i < strlen($mensaje1); $i++){
			        $hex .= dechex(ord($mensaje1[$i]));
			    }
    echo "cadena encriptada = ";
    echo "".$hex;

      }
  ?>


<br><br>
<form method="post" action="conversorhex.php">
<h2>Cadena a desencriptar</h2><br>
<input type="text" name="desencriptar">
<button class="btn btn-success"   type="submit">desencriptar</button>
</form>
<?php

    if(isset($_POST['desencriptar']))
      {
        $mensaje=$_POST['desencriptar'];
     $string='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     for ($i=0; $i < strlen($mensaje)-1; $i+=2){
              $string .= chr(hexdec($mensaje[$i].$mensaje[$i+1]));
          }
     echo "<br> cadena desencriptada = ";
     echo "".$string;
        
      }
  ?>

</center>



</body>
</html>






