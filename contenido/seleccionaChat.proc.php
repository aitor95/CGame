<?php
session_start();

include ("../conexion/conexion.php");

if (!isset($_SESSION['mail'])) {
   header('location: ../login.php');
}

$existeChat = "SELECT * FROM tbl_chat WHERE usu_emailC='$_SESSION[mail]' AND usu_emailP='$_REQUEST[usuM]'";
//echo $existeChat;
$chat1=mysqli_query($con,$existeChat);
if(mysqli_num_rows($chat1)>0){
	while($chat=mysqli_fetch_array($chat1)) {
  	header('location: ../chat.php?idChat='.$chat['id_chat'].'&usu_emailP='.$_REQUEST['usuM']);
  		}
	}else {
		$existeChat2 = "SELECT * FROM tbl_chat WHERE usu_emailC='$_REQUEST[usuM]' AND usu_emailP='$_SESSION[mail]'";
		//echo $existeChat2;
		$chat2=mysqli_query($con,$existeChat2);
		if(mysqli_num_rows($chat2)>0){

	  	while($chat=mysqli_fetch_array($chat2)) {
		  	header('location: ../chat.php?idChat='.$chat['id_chat'].'&usu_emailC='.$_REQUEST['usuM']);
		  		}
		  	}
		}

?>
