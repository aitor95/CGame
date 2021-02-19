
<?php

	include ("../conexion/conexion.php");

    	$sql = "DELETE FROM `tbl_juego` WHERE `id_juegos`='$_REQUEST[id_juegos]'";
    	
    	$datos2 = mysqli_query($con, $sql);

?>