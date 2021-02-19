<?php

	session_start();
	    if(isset($_SESSION['mail'])){
    	include("../conexion/conexion.php");

			$nick = $_REQUEST['nick'];
			$nom = $_REQUEST['nom'];
			$ape = $_REQUEST['ape'];
			$pass= md5($_REQUEST['pass']);

			//echo $nick. "/" . $nom . "/" . $ape . "/" . $pass;
			$ruta = "../images/juegos/thumb".$_SESSION['mail']."_".$_FILES['imagen']['name'];
			$imagen=$_SESSION['mail']."_".$_FILES['imagen']['name'];
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			$sql = "UPDATE tbl_usuario SET usu_nick='$nick', usu_nombre='$nom', usu_apellido='$ape', usu_contra='$pass' WHERE usu_email='$_SESSION[mail]'";
			$datos = mysqli_query($con, $sql);
			echo $sql;
		}

	$correcto="Se ha modificado su perfil correctamente";
	echo $correcto;
	header('Location: ../index.php');
?>
