<?php
	session_start();
	include ("../conexion/conexion.php");

		if(empty($_FILES['imagen']['name'])){
			$sql = "INSERT INTO tbl_juego (jue_nombre,id_genero,id_plataforma,usu_emailP,video) VALUES ('$_REQUEST[juego]',$_REQUEST[genero],$_REQUEST[plataforma],'$_SESSION[mail]','$_REQUEST[video]')";
			$datos = mysqli_query($con, $sql);
			
		}else{
			$ruta = "../images/juegos/thumb/".$_SESSION['mail']."_".$_FILES['imagen']['name'];
			$imagen=$_SESSION['mail']."_".$_FILES['imagen']['name'];
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			$sql = "INSERT INTO tbl_juego (jue_foto,jue_nombre,id_genero,id_plataforma,usu_emailP,video) VALUES ('$imagen','$_REQUEST[juego]',$_REQUEST[genero],$_REQUEST[plataforma],'$_SESSION[mail]','$_REQUEST[video]')";
			$datos = mysqli_query($con, $sql);
			
		}

	

	$respuesta="Su anuncio se ha insertado correctamente";
	echo $respuesta;
?>