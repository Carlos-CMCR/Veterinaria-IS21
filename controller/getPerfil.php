<?php
session_start();

			
if (isset($_SESSION["user"]) && isset($_SESSION["user"])) {

	include_once("controllerPerfil.php");
	$mostrarDatos = new controllerPerfil;
	$mostrarDatos -> mostrarDatosPerfil();
} else {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("La sesión ha caducado, ingrese nuevamente","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Atrás</a>");
}

?>