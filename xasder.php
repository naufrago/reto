<?php
	include ("conexion.php");
	if (isset($_GET['dom'])) {
		$idterminar=$_GET['dom'];
		$url=$_GET['url'];
		$eliminar="DELETE FROM locked WHERE id_usuario='$idterminar' and url='$url'";
		$resultado=mysqli_query($conexion,$eliminar);
	 	header("location: $url");
	}else{
		header("location: indexreto.php");
	}
	

?>