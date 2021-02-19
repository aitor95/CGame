<?php
    session_start();
    include ("../conexion/conexion.php");

    $sql="SELECT * FROM tbl_juego WHERE id_juegos=$_REQUEST[id_juego]";
    $datos = mysqli_query($con, $sql);
       //si se devuelve un valor diferente a 0 (hay datos)
    if(mysqli_num_rows($datos)!=0){
        while ($mostrar = mysqli_fetch_array($datos)) {
            $mail= $mostrar['usu_emailP'];
?>
            <div class="container">
                <div class="box">
                    <div class="center gap">
                        <h2><?php echo utf8_encode($mostrar['jue_nombre']); ?></h2>
                        <!-- <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac<br>turpis egestas. Vestibulum tortor quam, feugiat vitae.</p> -->
                    </div><!--/.center-->
                    <div class="row">
                        <ul class="portfolio-items col-4">
                            <div class="juego_izquierda">
                                <li class="portfolio-item apps">
                                    <div class="item-inner">
                                        <div class="portfolio-image">
                                            <?php
                                            if ($mostrar['jue_foto']==""){
                                            ?>
                                                <img class="img-responsive" src="./images/juegos/thumb/juego.png" alt="">
                                            <?php
                                            }else{
                                            ?>
                                                <img class="img-responsive" src="./images/juegos/thumb/<?php echo $mostrar['jue_foto'];?>" alt="">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        </br>
                                        <p>Propietario del Juego:
                                        <!-- Input que pasa el campo usu_emailP de la funcion perfil, y esta la redirije al perfil del usuario -->
                                        <a <?php echo "<input type='button' id='idUsuChat' onclick=perfil('$mostrar[usu_emailP]')"; ?> ><?php echo utf8_encode($mostrar['usu_emailP']); ?></a>
                                        <p>Descripción: <?php echo utf8_encode($mostrar['jue_nombre']); ?></p>
                                    </div>
                                </li>
                            </div>
                            <?php
                            if(isset($mostrar['video'])){
                                    $cadena=$mostrar['video'];
                                    $subcadena="https://www.youtube.com/embed/";

                                  if (strstr ($cadena,$subcadena)){
                                    ?>
                                        <div class="video_derecha">
                                            <iframe src=<?php echo $mostrar['video'];?>></iframe>
                                        </div>
                                    <?php
                            }
                        }
                            ?>
                            </ul>
                    </div><!-- End row -->
                </div><!--/.box-->
            </div><!--/.container-->
            <?php

        }
    }
    ?>
<script src="../js/contenido_web.js"></script>
