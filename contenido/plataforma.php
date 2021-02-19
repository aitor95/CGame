<?php
session_start();
include ("../conexion/conexion.php");

?>



<div class="container">
    <div class="box first">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                

                    <div id="generos">
                        <?php

                        $sql="SELECT * FROM tbl_genero ORDER BY gen_nombre ASC";
                        $datos = mysqli_query($con, $sql);
                        //si se devuelve un valor diferente a 0 (hay datos)
                        if(mysqli_num_rows($datos)!=0){
                            while ($generos = mysqli_fetch_array($datos)) {
                                echo utf8_encode("<input type='button' class='btn' id='idUsuChat' onclick=filtroGenero('$generos[id_genero]','$_REQUEST[idPlat]') value = '$generos[gen_nombre]' '> ");

                            }
                        }
       ?>

                    </div>
                </br>

                <div class="row">
                    <ul class="portfolio-items col-5" id="juePlat">
                    </ul>
                </div>
            </div>


        </div><!--/.row-->
    </div><!--/.box-->
</div><!--/.container-->
