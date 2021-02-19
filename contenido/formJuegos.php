<?php
session_start();
	include ("../conexion/conexion.php");

?>	<div class="top-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<div class="col-sm-offset-2 text">
									<h1>Subida Juego</h1>
								</div>
							</div>
						</div>
						<div class="form-bottom">
							<form id="form_Juego" method="POST" action="#form_Juego" enctype="multipart/form-data">

							<div class="formulario">
							<!-- nombre juego -->
								<label>Nombre Juego: </label>
								<div>
									<input id="juego" name="juego" type="text" maxlength="50" size="30" value=""/>
									<span id="error_juego_vacio" class="error"></span>
								</div>
								<!-- genero juego -->

								<div><input id="buscarBD" name="buscarBD" type="hidden" value="" /></div>
								<label> Archivo</label>
								<div class="archivo">
									<input type="file" name="imagen" id="imagen" title="Seleccionar imagen desde su PC"/>
								</div>
								<label> Video Youtube(Ej: https://www.youtube.com/embed/IdVideo)</label>
								<div>
									<input id="video" name="video" type="text" maxlength="50" size="30" value=""/>
									<span id="error_video_vacio" class="error"></span>
								</div>
								<label>Plataforma: </label>
								<?php
									$sqlPlataforma="SELECT * FROM tbl_plataforma";
									$plat = mysqli_query($con, $sqlPlataforma);

								?>
								<div>
									<select id="plat" name="plataforma">
										<?php
											while($plataforma=mysqli_fetch_array($plat)) {
												echo utf8_encode("<option value=\"$plataforma[id_plataforma]\">$plataforma[pla_nombre]</option>");
											}
										?>
									</select>

								</div>


								<label>Genero: </label>
								<?php

									$sqlGenero="SELECT * FROM tbl_genero";
									$gen = mysqli_query($con, $sqlGenero);

								?>
								<div>
									<select id="genero" name="genero">
										<?php

											while($generos=mysqli_fetch_array($gen)) {
												echo utf8_encode("<option value=\"$generos[id_genero]\">$generos[gen_nombre]</option>");
											}
										?>
									</select>

								</div>
								<!-- BOTON DE ENVIAR -->
							</br>
								<input type="button" class="btn" name="submit" value="Insertar" onclick="return validaFormularioJuego();" />

							</div>
							</form>
							<div id="respuesta"></div>
						</div>
					</div>
				</div>
			</div>
	</div>
