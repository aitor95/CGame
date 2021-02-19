<?php
	session_start();
	//include("conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>CGame</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login/css/form-elements2.css">
    <link rel="stylesheet" href="login/css/style2.css">
    <script type="text/javascript" src="js/validaFormulario.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/maps.js"></script>
</head>
<body onload="inicializar()">

    <div class="top-content">
        <div class="inner-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3 form-box">

                        <div class="form-top">
                            <div class="form-top-left">
                                <div class="col-sm-offset-2 text">
                                    <h1>Página de Registro</h1>
                                </div>
                            </div>
                        </div>
                        <div class="form-bottom">

                            <form name="formulario" id="form_registro" method="GET" action="contenido/registro.proc.php" onsubmit="return validaFormulario();">

								<div class="bloque_izquierda">
    				                <!-- CORREO ELECTRONICO DEL USUARIO -->

                                    <div class="form-group" id="mail">
                                        <div id="error_correo_vacio" class="label_error"></div>
                                        <div id="error_correo_formato" class="label_error"></div>
                                        <input id="correo" type="text" name="correo" placeholder="Email" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <div class="label_error" id="error_direccion"></div>
                                        <input id="direccion" type="text" name="direccion" placeholder="Dirección" onchange="direc()">
                                    </div>
                                    <div class="form-group">
                                        <div id="error_nickname" class="label_error"></div>
                                        <input id="nickname" type="text" name="nick" placeholder="Nickname" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <div class="label_error"></div>
                                        <div id="error_nombre" class="label_error"></div>
                                        <input id="nombre" type="text" name="nombre" placeholder="Nombre" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <div class="label_error" id="error_apellido"></div>
                                        <input id="apellido" type="text" name="apellido" placeholder="Apellido" value=""/>

                                        <!-- INPUTS DE LONGITUD Y LATITUD -->
                                        <input id="latitud" type="hidden" name="latitud" maxlength="255" />
                                        <input id="longitud" type="hidden" name="longitud" maxlength="255" />
                                    </div>
                                    <div class="form-group">
                                        <div class="label_error" id="error_pass_vacio"></div>
                                        <input id="pass" name="pass" type="password" placeholder="Contraseña" value=""/>
                                    </div>
                					<!-- CONFIRMACIÓN DEL USUARIO -->
                                    <div class="form-group">
                                        <div class="label_error" id="error_confirmar_pass_incorrecto"></div>
                                        <div class="label_error" id="error_confirmar_pass_vacio"></div>
                                        <input id="confirmar_pass" type="password" placeholder="Confirmar Contraseña" value=""/>
                                    </div>
                                </div>
                                <div class="bloque_derecha">
                                    <div id="map_canvas" class="map"></div>
                                </div>
                                <div>
                                    <input type="submit"  class="btn" id="registro" name="submit" value="Registrarse" />
                					<button type="button" class="btn" onclick="location='login.php'">Atrás</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="login/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="login/js/jquery.backstretch.min.js"></script>
        <script src="login/js/scripts.js"></script>
	</body>
</html>
