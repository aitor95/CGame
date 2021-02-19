<?php
session_start();
	include ("../conexion/conexion.php");
	$sql="SELECT * FROM `tbl_usuario` WHERE tbl_usuario.usu_email='$_SESSION[mail]'";
	$sql2="SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_usuario.usu_email=tbl_juego.usu_emailP WHERE usu_email='$_SESSION[mail]'";
	$datos2 = mysqli_query($con, $sql2);
?>
<div class="container">
    <div class="box">
        <div class="row">
            <ul class="portfolio-items col-4">
            <?php
            //consulta de datos según el filtrado
              $datos = mysqli_query($con,$sql);
                while ($mostrar = mysqli_fetch_array($datos)) {
            ?>
                    	<!-- Nick usuario -->
						<div class="usuario_izquierda">
							<h2><?php echo utf8_encode($mostrar['usu_nick']); ?></h2>

							<!-- Foto usuaro usuario -->

							<?php
					 		if(!empty($mostrar['usu_foto'])){
        						$fichero="./images/media/$mostrar[usu_foto]";
        						echo"</br><img class='foto_user' src='$fichero'>";
    						}else{
                                $fichero2="./images/media/avatar.jpg";
                                echo"</br><img class='foto_user' src='$fichero2'>";
    						}
							?>


							<div> <?php echo $mostrar['usu_nombre'] . " " . $mostrar['usu_apellido']; ?> </div>
							<div> <?php echo $mostrar['usu_email'];  ?> </div>
						    <a <?php echo "<input type='button' id='idUsuChat' onclick=modificar('$mostrar[usu_email]')"; ?> >Modificar perfil</i></a>
						</div>
						<script>

	                    inicializar();
	                    function inicializar(){
	                      var myLatlng = new google.maps.LatLng(<?php echo $mostrar['usu_lat']; ?>,<?php echo $mostrar['usu_long']; ?>);
	                      var mapOptions = {
	                        zoom:12,
	                        center: myLatlng,
	                        mapTypeId: google.maps.MapTypeId.ROADMAP
	                      }
	                      mapa = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

	                      var marker = new google.maps.Marker({
	                        position: myLatlng,
	                        map: mapa,
	                        title:"El usuario esta aquí"
	                      });

	                    }
	                    </script>
	                    <div class="mapa_derecha">
	                        <div id="map_canvas" class="mapa_user"></div>
	                    </div>
					<div class="overlay">
						<?php
						}
		                ?>
                        <!--Mediante on onclick, se pasa a la función juegos la variable id_juegos, que esta redirige a la página de perfiljuego -->
                    </div>

			</ul>
        </div><!--/.row-->
    </div><!--/.box-->
</div><!--/.container-->



        <div class="container">
   <div class="box">
       <div class="center gap">
           <h2>Mis Juegos: </h2>
       </div><!--/.center-->
       <div class="row">
            <ul class="portfolio-items col-4">
             <?php
                //si se devuelve un valor diferente a 0 (hay datos)
                if(mysqli_num_rows($datos2)!=0){
                    while ($mostrarjuego = mysqli_fetch_array($datos2)) {
                ?>

           				<li class="portfolio-item apps">
                			<div class="item-inner">
                    			<div class="portfolio-image">
                                    <?php
                                      if ($mostrarjuego['jue_foto']==""){
                                        ?>
                                      <img class="img-responsive" src="./images/juegos/thumb/juego.png" alt="">
                                      <?php
                                    }else{
                                      ?>
                                      <img class="img-responsive" src="./images/juegos/thumb/<?php echo $mostrarjuego['jue_foto'];?>" alt="">
                                      <?php
                                    }
                                    ?>
                        			<div class="overlay">
                                    <!--Mediante on onclick, se pasa a la función juegos la variable id_juegos, que esta redirige a la página de perfiljuego -->
                            			<a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" onclick="juegos(<?php echo $mostrarjuego['id_juegos'];?>);"><i class="unhide icon"></i></a>
                        			</div>
                    			</div>
                				<h5><?php echo utf8_encode($mostrarjuego['jue_nombre']); ?></h5>
								<a <?php echo "<input type='button' id='id_juegos' onclick=borrarjuego('$mostrarjuego[id_juegos]')"; ?> >Borrar Juego</i></a>
                			</div>
            			</li><!--/.portfolio-item-->
                <?php
                    }
                }
                ?>

       		</ul>
       </div><!-- End row -->
   </div><!--/.box-->
</div><!--/.container-->
<script src="../js/contenido_web.js"></script>
