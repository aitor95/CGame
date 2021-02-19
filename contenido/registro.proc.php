<?php
session_start();

include ("../conexion/conexion.php");

if (!isset($_SESSION['mail'])) {
   header('location: ../index.php');
}

$pass_md5 = md5($_REQUEST['pass']);
$sql = "INSERT INTO `bd_cgames`.`tbl_usuario` (`id_usuario`, `usu_nombre`, `usu_email`,  `usu_contra`, `usu_apellido`)
        VALUES (NULL, '$_REQUEST[nombre]', '$_REQUEST[correo]', '$pass_md5', '$_REQUEST[apellido]')";

if (mysqli_query($con,$sql)){
  	header("location: ../login.php");
		$_SESSION['creado_correctamente'] = "El usuario se ha creado correctamente, bienvenido a nuestra comunidad.";
}else {
   echo "Ha habido un error";
}

?>
