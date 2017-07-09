<aside>

          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  
                  
                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-sitemap"></i>
                          <span>Niveles completados</span>
                      </a>
                      <ul class="sub">
                          <?php
                          include ("conexion.php");
                          $consulta="SELECT * FROM niveles_completos WHERE id_usuario='$id' and id_nivel<>'16' ORDER BY id_nivel";
                          $resutlado=mysqli_query($conexion,$consulta);
                          while ( $fila=mysqli_fetch_assoc($resutlado)){ 
                            $nivel=$fila['id_nivel'];
                            $consulta1="SELECT * FROM niveles WHERE id_nivel='$nivel'";
                            $resutlado1=mysqli_query($conexion,$consulta1);
                            $fila1=mysqli_fetch_assoc($resutlado1);
                            $nombrenivel=$fila1['nombre_nivel'];
                            $url=$fila1['url'];

                            ?>
                            <li><a  href="<?php echo $url;?>">
                            <i class="icon-thumbs-up-alt"></i>
                            <span><?php echo $nombrenivel; ?></span></a></li>
                            <?php



                          

                            
                          }
                          

                          ?>
                          
                      </ul>
                      
                  </li>
                  <!--multi level menu end-->

                  <?php 
                  $consulta2="SELECT * FROM ganadores WHERE id_usuario='$id'";
                  $resutlado2=mysqli_query($conexion,$consulta2);
                  while ( $fila=mysqli_fetch_assoc($resutlado2)){
                          if ($fila['id_usuario']==$id) {?>
                              <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="icon-book"></i>
                                    <span>Winners</span>
                                </a>
                                <ul class="sub">
                                    <li ><a  href="winner.php">Lista de ganadores</a></li>
                                    
                                </ul>
                            </li> <?php
                            # code...
                          }
                  }
                  
                  ?>
                  


              </ul>
              <!-- sidebar menu end-->
          </div>
      
      </aside>