<form action="nivel2.php" method="post" >
    <h2>cual es tu nombre: </h2><input type="text" name="nivel_2" id="nivel_2" />
    <button class="btn btn-success"   type="submit">enviar</button>
  </form>

  <?php
$mensaje1="palabra clave:hexadecimal";
$hex='';
			    for ($i=0; $i < strlen($mensaje1); $i++){
			        $hex .= dechex(ord($mensaje1[$i]));
			    }

 echo "$hex";
$mensaje=$hex;
$string="";
          for ($i=0; $i < strlen($mensaje)-1; $i+=2){
              $string .= chr(hexdec($mensaje[$i].$mensaje[$i+1]));
          }
 echo "$string";

?>

windows.open=function(){
              var a=document.createElement('a');
            a.target= '_blank';
            a.href='dead.php';
            a.click();


              };