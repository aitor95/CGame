<?php
session_start();
	include ("../conexion/conexion.php");
			
	$sql = "SELECT * FROM tbl_mensajes INNER JOIN tbl_usuario ON tbl_mensajes.usu_email=tbl_usuario.usu_email WHERE id_chat=$_REQUEST[chat] ORDER BY id_mensaje ASC";

	$mensaje = array();

	$datos = mysqli_query($con, $sql);
	if(mysqli_num_rows($datos)){
		while ($mens = mysqli_fetch_array($datos)) {
			$sql2="UPDATE tbl_mensajes SET visto=1 WHERE id_chat=$_REQUEST[chat] AND usu_email !='$_SESSION[mail]'";
			$datos2 = mysqli_query($con, $sql2);
			//$sql3="UPDATE tbl_chat SET visto=1 WHERE id_chat=$_REQUEST[chat] AND (usu_emailP !='$_SESSION[mail]' OR usu_emailC !='$_SESSION[mail]') ";
			//$datos3 = mysqli_query($con, $sql3);
		// echo "<div id='contenido'><div>";
		// 	echo "<img src='img/$mens[usuario].jpg' width='20%'><a href='#'><div id='sec'>$mens[comentario]</div></a>";
		// echo "</div><br></div>";

			$usuario = $mens['usu_nick'];
			$mens_mensaje = $mens['mens_mensaje'];
			$email = $mens['usu_email'];
			$mensaje[] = array('usuario'=> $usuario, 'mensaje'=> $mens_mensaje,'mail'=> $email);

		}
	}

	$json_str = json_encode($mensaje);
	echo $json_str;
?>
