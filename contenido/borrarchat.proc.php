<?php
session_start();

include ("../conexion/conexion.php");

if (!isset($_SESSION['mail'])) {
   header('location: ../login.php');
}

$borrarMensaje = "DELETE FROM tbl_mensajes WHERE id_chat='$_REQUEST[idChat]'";

$borrar=mysqli_query($con,$borrarMensaje);

$borrarChat = "DELETE FROM tbl_chat WHERE id_chat='$_REQUEST[idChat]'";

$borrar2=mysqli_query($con,$borrarChat);


?>
