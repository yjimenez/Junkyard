<?php

if($_SESSION['ooyala'])
header("Location: index.php");

//declaramos clase usuarios (tabla, campo usuario, campo password, campo activo -si existe-, session)
$usr =  new usuarios("usuarios", "userL", "passL", "actL", "ooyala");
$error=0;

if($_POST) {
if(strlen($_POST['user'])>0&&strlen($_POST['password'])>0){
		$usr->usuario($_POST['user'], md5($_POST['password']));
		if($usr->allow()) {
			//header("Location: index.php?section=home");
			
		}
		else
			$error=1;
	}
else
	$error=2;
}


//Archivo de la login
require_once('view/login/login.php');
?>