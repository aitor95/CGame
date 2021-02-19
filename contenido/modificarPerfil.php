<?php
session_start();
include ("../conexion/conexion.php");

$sql="SELECT * FROM `tbl_usuario` WHERE tbl_usuario.usu_email='$_SESSION[mail]'";
?>
<div class="top-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 form-box">
				<div class="form-top">
					<div class="form-top-left">
						<div class="col-sm-offset-2 text">
							<h1>Modificar tu perfil</h1>
						</div>
					</div>
				</div>
				<div class="form-bottom">
					<form id="form_Juego" method="POST" action="./contenido/modificar_usuario.proc.php" onsubmit="return validaperfil();" enctype="multipart/form-data">							<div class="two fields">
					    <!-- PARTE DONDE SE VA A MOSTRAR LA INFORMACIÓN -->
					    <?php
					    //consulta de datos según el filtrado
					    $datos = mysqli_query($con, $sql);
					    if(mysqli_num_rows($datos)>0){
					        $mostrar=mysqli_fetch_array($datos);
					        ?>
					        <div class="formulario">
					            <!-- APODO O NICKNAME DEL USUARIO -->
					            <label>Nick: </label>
					            <div>
					                <input type="text" id="nick" name="nick"  maxlength="30" size="30" value="<?php echo utf8_encode($mostrar['usu_nick']);?>"/>
					                <span id="error_nickname"></span>
					            </div>


					            <!-- NOMBRE DEL USUARIO -->
					            <label>Nombre: </label>
					            <div>
					                <input type="text" id="nombre" name="nom"  maxlength="30" size="30" value="<?php echo utf8_encode($mostrar['usu_nombre']);?>"/>
					                <span id="error_nombre"></span>
					            </div>

					            <!-- APODO O NICKNAME DEL USUARIO -->
					            <label>Apelido: </label>
					            <div>
					                <input type="text" id="apellido" name="ape"  maxlength="30" size="30" value="<?php echo utf8_encode($mostrar['usu_apellido']);?>"/>
					                <span id="error_apellido"></span>
					            </div>

					            <!-- CONTRASEÑA DEL USUARIO -->
					            <label>Nueva contraseña:</label>
					            <div>
					                <input id="pass" name="pass" size="30" type="password"/>
					                <span id="error_pass_vacio" class="error"></span>
					            </div>

					            <!-- CONFIRMACIÓN CONTRASEÑA DEL USUARIO -->
					            <label>Confirmar nueva contraseña:</label>
					            <div>
					                <input id="confirmar_pass" size="30" name="confirmar_contrasena" type="password"/>
					                <span id="error_confirmar_pass_vacio" class="error"></span>
					                <span id="error_confirmar_pass_incorrecto" class="error"></span>
					            </div>

					            <!-- CAMBIAR IMAGEN DE PERFI -->
					            <label>Cambiar foto de perfil: </label>
					            <div class="archivo">
					                <input type="file" name="imagen" id="imagen" title="Seleccionar imagen para perfil desde su PC"/>
					            </div>
							</br>
					            <!-- BOTON DE ENVIAR -->
					            <input type="submit" name="submit" value="Enviar"/>
					        </div>
					    </form>
					<div id="respuesta"></div>
						<?php
						}
						?>
				</div><!--/.container-->
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="./js/modificar_perfil.js"></script>
