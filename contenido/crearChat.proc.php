<?php
session_start();

include ("../conexion/conexion.php");

if (!isset($_SESSION['mail'])) {
   header('location: ../login.php');
}
else{
	$existeChat = "SELECT * FROM tbl_chat WHERE usu_emailP='$_SESSION[mail]' AND usu_emailC='$_REQUEST[usuM]'";
	$chat1=mysqli_query($con,$existeChat);
	if(mysqli_num_rows($chat1)>0){	
		header('location: listaChats.php');
	}else{
		$existeChat2 = "SELECT * FROM tbl_chat WHERE usu_emailC='$_SESSION[mail]' AND usu_emailP='$_REQUEST[usuM]'";
		$chat2=mysqli_query($con,$existeChat2);
		if(mysqli_num_rows($chat2)>0){
			header('location: listaChats.php');
		}else{	

		$creaChat="INSERT INTO tbl_chat(usu_emailP,usu_emailC) VALUES ('$_SESSION[mail]','$_REQUEST[usuM]')";
			echo $creaChat;
		  	mysqli_query($con,$creaChat);
		  	header('location: listaChats.php');
	}
			 }
			}
?>