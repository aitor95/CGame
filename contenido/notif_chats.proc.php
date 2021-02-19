<?php

	session_start();
	    if(isset($_SESSION['mail'])){
    	include("../conexion/conexion.php");

		//cambiar consulta por consulta de count id_chat de mensajes innerjpin chats where tbl_mensajes.visto=0;
			$sql = "SELECT COUNT(DISTINCT tbl_chat.id_chat) AS total FROM tbl_chat INNER JOIN tbl_mensajes ON tbl_chat.id_chat=tbl_mensajes.id_chat WHERE tbl_mensajes.visto=0 AND tbl_mensajes.usu_email!='$_SESSION[mail]'";
			$datos = mysqli_query($con, $sql);
			if (mysqli_num_rows($datos)>0){
			while ($contador = mysqli_fetch_array($datos)) {
				$cont=$contador['total'];			
			}
			echo $cont;
		}
		}
	
	

?>
