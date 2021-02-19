<?php
include("../conexion/conexion_scroll.php"); //include config file
$get_total_rows = 0;
$carga_contenido = $mysqli-> query("SELECT * FROM tbl_juego");

if($carga_contenido){
	$get_total_rows = $carga_contenido->fetch_row();
}
//break total records into pages
$total_groups= ceil($get_total_rows[0]/$items_per_group);
?>
