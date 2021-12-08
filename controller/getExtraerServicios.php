<?php
session_start();
if (isset($_SESSION['idrol'])) {
	include_once("../model/eProducto.php");
	$extraer = new eProducto;
	$returned = $extraer -> listarServicios();

	$iduser=$_SESSION['iduser'];
	include_once("../model/eMascota.php");
	$extraer = new mascota;
	$returned2 = $extraer -> obtenerMascotas($iduser);

	include_once("../view/modulos/moduloAdministracion/formAgregarCita.php");
	$enviar = new formAgregarCita;
	$enviar -> formAgregarCitaShow($returned,$returned2);
} else {
	include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShow("La sesión ha caducado.","<a href='../index.php'>Ir al inicio</a>");
}

?>
