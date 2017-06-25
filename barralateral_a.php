<aside>

          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  
                  
                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-sitemap"></i>
                          <span>Usuarios Registrados</span>
                      </a>
                      <ul class="sub">
                          <?php
                          include ("conexion.php");
                          $consulta="SELECT * FROM usuario ORDER BY user";
                          $resutlado=mysqli_query($conexion,$consulta);
                          while ( $fila=mysqli_fetch_assoc($resutlado)){ 
                                $nombrenivel=$fila['user'];
                                $url=$fila['id_usuario'];

                            ?>
                            <li><a  href="datos.php?id=<?php echo $url;?>"><?php echo $nombrenivel; ?></a></li>
                            <?php



                          

                            
                          }
                          

                          ?>
                          
                      </ul>
                      
                  </li>
                  <!--multi level menu end-->

                  
                              <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="icon-book"></i>
                                    <span>Winners</span>
                                </a>
                                <ul class="sub">
                                    <li ><a  href="winn.php">Lista de ganadores</a></li>
                                    
                                </ul>
                            </li> 
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="icon-key"></i>
                                    <span>palabras clave</span>
                                </a>
                                <ul class="sub">
                                    <li ><a  href="keyword.php">Lista</a></li>
                                    
                                </ul>
                            </li> <?php
                            # code...
                          
                  
                  
                  ?>
                  


              </ul>
              <!-- sidebar menu end-->
          </div>
      
      </aside>