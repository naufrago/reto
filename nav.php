<!--Navigation bar-->
   <nav class="navbar navbar-default navbar-fixed-top header white-bg">
     <div class="container">
       <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       
            <div class="sidebar-toggle-box">
                <div data-original-title="Oculta barra lateral" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            
     
       
        <a class="navbar-brand" href="indexreto.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reto<span>-logico</span></a>
        

       </div>

       <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
          
         <li><a href="perfil_usuario.php?id_usuario=<?php echo $id ;?>"  data-original-title="perfil de usuario" tooltips class="tooltips"  class="icon-user"> <i class="icon-user"></i>
                          <span>Nombre de usuario : <?php echo $usuario; ?></span></a></li>
         <li class="btn-trial"><a href="cerrar_sesion.php?id_usuario=<?php echo $id ;?>"   data-toggle="modal"> <i class="icon-off"></i>
                          <span>Salir</span></a></li>

       </ul>
       </div>
     </div>
   </nav>

   <?php 
    $consulta="SELECT * FROM locked where id_usuario='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_assoc($resultado);
    $num=mysqli_num_rows($resultado);
    if ($fila['url']=='deep.php') {
      header('location: lock_screen.php');
    }
    if ($fila['url']=='tool.php') {
      header('location: game/index.php');
    }
    if ($fila['url']=='joker.php') {
      header('location: lock_screen1.php');
    }

?>