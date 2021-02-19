<?php
	include ("../conexion/conexion.php");
    	$sql="SELECT * FROM tbl_juego ORDER BY RAND() LIMIT 8";
    	$datos = mysqli_query($con, $sql);
?>
