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
                          $consulta="SELECT * FROM niveles_completos WHERE id_usuario='$id' ORDER BY id_nivel";
                          $resutlado=mysqli_query($conexion,$consulta);
                          while ( $fila=mysqli_fetch_assoc($resutlado)){ 
                            $nivel=$fila['id_nivel'];
                            $consulta1="SELECT * FROM niveles WHERE id_nivel='$nivel'";
                            $resutlado1=mysqli_query($conexion,$consulta1);
                            $fila1=mysqli_fetch_assoc($resutlado1);
                            $nombrenivel=$fila1['nombre_nivel'];
                            $url=$fila1['url'];

                            ?>
                            <li><a  href="<?php echo $url;?>"><?php echo $nombrenivel; ?></a></li>
                            <?php



                          

                            
                          }
                          

                          ?>
                          
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      
      </aside>