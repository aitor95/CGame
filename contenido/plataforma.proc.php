<?php
	include ("../conexion/conexion.php");
	$sql = "SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_juego.usu_emailP=tbl_usuario.usu_email WHERE id_genero=$_REQUEST[idGen] AND id_plataforma=$_REQUEST[idPlat] ORDER BY id_juegos ASC";

	$juego = array();

	$datos = mysqli_query($con, $sql);
	if(mysqli_num_rows($datos)){
		while ($jue = mysqli_fetch_array($datos)) {

		// echo "<div id='contenido'><div>";
		// 	echo "<img src='img/$jue[usuario].jpg' width='20%'><a href='#'><div id='sec'>$jue[comentario]</div></a>";
		// echo "</div><br></div>";

			$usuario = $jue['usu_nick'];
			$jue_nombre = $jue['jue_nombre'];
			$jue_foto = $jue['jue_foto'];
			$id_juegos = $jue['id_juegos'];
			$email = $jue['usu_email'];
			$juego[] = array('usuario'=> $usuario, 'juego'=> $jue_nombre,'foto'=> $jue_foto,'id_juego'=>$id_juegos,'email'=>$email);

		}
	}

	$json_str = json_encode($juego);
	echo $json_str;
?>
