<?php
	include ("../conexion/conexion.php");
	$sql = "INSERT INTO tbl_mensajes (mens_mensaje,id_chat,usu_email,visto) VALUES ('$_REQUEST[textoIns]','$_REQUEST[chat]','$_REQUEST[usu2]',0)";
	$datos = mysqli_query($con, $sql);
	//$sql3="UPDATE tbl_chat SET visto=0 WHERE id_chat=$_REQUEST[chat]";
	//$datos3 = mysqli_query($con, $sql3);
	
?>