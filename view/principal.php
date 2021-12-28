<?php
session_start();


if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {

	if (isset($_GET['action'])) {
	require_once('../helpers/helpers.php');  
	if ($_GET['action']=="formConsulta" ||          
		$_GET['action']=="formFarmacia"|| 
		$_GET['action']=="formBaño" || 
		$_GET['action']=="formJugetes"|| 
		$_GET['action']=="formVacunacion" ||
		$_GET['action']=="formLimpieza"){
		include "modulos/moduloUsuario/servicios/".$_GET['action'].".php";
	}}
	elseif ($_SESSION['idrol']==1) {
		include "view/modulos/encabezadoc.php";
		include "view/modulos/inicio.php";      
    	include "view/modulos/pie.php";
		
	} elseif ($_SESSION['idrol']==4) {
		include "view/modulos/encabezadoa.php";
		include "view/modulos/inicio.php";      
    	include "view/modulos/pie.php";
		
	}
	}
elseif (isset($_GET['action'])) {
	require_once('../helpers/helpers.php');  
	if ($_GET['action']=="formConsulta" ||          
		$_GET['action']=="formFarmacia"|| 
		$_GET['action']=="formBaño" || 
		$_GET['action']=="formJugetes"|| 
		$_GET['action']=="formVacunacion" ||
		$_GET['action']=="formLimpieza"){
		include "modulos/moduloUsuario/servicios/".$_GET['action'].".php";
}} else {
	include "view/modulos/encabezado.php";
    include "view/modulos/inicio.php";      
    include "view/modulos/pie.php";
}

    
?>
		
