<?php
	require_once("../class/log.php");
	$usu= new Persona();
	$usu->setUsu("$_POST[correo]");
	$usu->setPass("$_POST[contrasena]");
	$retorno= $usu->logarse($usu->getusu(),$usu->getPass());
	$usu->redirigir($retorno);
?>