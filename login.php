<?php
 	//Iniciamos sesion.
	session_start();
	if(isset($_SESSION['error_login'])) $error_login = $_SESSION['error_login'];
	if(isset($_SESSION['creado_correctamente'])) $creado_correctamente = $_SESSION['creado_correctamente'];
	if(isset($_SESSION['validarse'])) $validarse = $_SESSION['validarse'];
	session_destroy();
	setcookie('Cgame', '', time() - 3600);
?>
<html>
<head>
    <title>CGame</title>


    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="login/css/form-elements.css">
    <link rel="stylesheet" href="login/css/style.css">
</head>
<body>
	<div class="top-content">
		<div class="inner-bg">
            <div class="container">
                <div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>CGames</strong> Login Form</h1>
                        <div class="description">
                        	<p>
                            	Tu mejor página de intercambios
                        	</p>
                        </div>
                    </div>
				</div>
				 <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                    	<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Login to our site</h3>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="fa fa-lock"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
							<form class="login-form" method="POST" action="contenido/login.proc.php">
								<input id="login" type="hidden" name="login" value="si">
								<!-- MENSAJES BUENOS -->
								<?php
								if(isset($creado_correctamente))
									echo "<div class='alert alert-success' role='alert'>" . $creado_correctamente. "</div>";
								?>
								<!-- MENSAJES MALOS -->
								<?php
								if(isset($error_login))
									echo "
						 			<div class='alert alert-warning' role='alert'>". $error_login. "</div>";
								if(isset($validarse))
									echo "<div class='ui form error'>
						 			<div class='alert alert-danger' role='alert'>". $validarse. "</div>";
								?>
								<div class="form-group">
		                    		<label class="sr-only" for="form-username">Username</label>
		                        	<input id="login" type="text" name="correo" placeholder="Email..." class="form-username form-control">
		                        </div>
								<div class="form-group">
		                        	<label class="sr-only" for="form-password">Password</label>
		                        	<input id="login" type="password" name="contrasena" placeholder="Contraseña..." class="form-password form-control">
		                        </div>


 								<button type="submit" class="btn" onclick="location='contenido/login.proc.php'">Login</button>
 		 						<button type="button" class="btn" onclick="location='registro.php'">Registrate </button>
 							</form>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<script src="login/js/jquery-1.11.1.min.js"></script>
    <!-- <script src="login/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="login/js/jquery.backstretch.min.js"></script>
    <script src="login/js/scripts.js"></script>
</body>
</html>
