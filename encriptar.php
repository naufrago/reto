<!DOCTYPE html>
<html>
<head>
	<title>Encriptar</title>
    <?php include "head.php"; ?>
</head>
<body>
<br><br>
<center>
<form method="post" action="encriptar.php">
<h2>Cadena a encriptar</h2><br>
<input type="text" name="encriptar">
<button class="btn btn-success"   type="submit">Encriptar</button>
</form>

<?php

    if(isset($_POST['encriptar']))
      {
        $cadena=$_POST['encriptar'];
    $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
    echo "cadena encriptada = ";
    echo "".$encrypted;

      }
  ?>


<br><br>
<form method="post" action="encriptar.php">
<h2>Cadena a desencriptar</h2><br>
<input type="text" name="desencriptar">
<button class="btn btn-success"   type="submit">Desencriptar</button>
</form>
<?php

    if(isset($_POST['desencriptar']))
      {
        $cadena=$_POST['desencriptar'];
     $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
     echo "<br> cadena desencriptada = ";
     echo "".$decrypted;
        
      }
  ?>

</center>



</body>
</html>