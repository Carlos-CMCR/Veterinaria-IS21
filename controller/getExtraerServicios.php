<?php
session_start();
if (isset($_SESSION['idrol'])) {
	include_once("../model/eProducto.php");
	$extraer = new eProducto;
	$returned = $extraer -> listarServicios();

	include_once("../view/modulos/moduloAdministracion/formAgregarCita.php");
	$enviar = new formAgregarCita;
	$enviar -> formAgregarCitaShow($returned);
} else {
	include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShow("La sesión ha caducado.","<a href='../index.php'>Ir al inicio</a>");
}

?>
