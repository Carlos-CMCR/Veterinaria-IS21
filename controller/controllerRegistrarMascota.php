<?php
class controllerRegistroMascota{

	public function registrarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota) {
		session_start();
		$iduser = $_SESSION['iduser'];
		include_once("../model/eMascota.php");
		$enviar = new mascota;
		$retornado = $enviar -> agregarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota,$iduser);

		if ($retornado == 1) {
					include_once("../shared/formMensajeSistema.php");
		            $mensaje = new formMensajeSistema;
		            $mensaje ->formMensajeSistema();
		            $mensaje ->formMensajeSistemaShowExito("Ha registrado correctamente su mascota. ¿Desea registrar otra mascota?","<a href='../view/modulos/moduloSeguridad/formRegistrarMascota.php'>SI   </a> <a href='../index.php'>   NO</a>");

		} elseif($retornado == 0) {
					include_once("../shared/formMensajeSistema.php");
		            $mensaje = new formMensajeSistema;
		            $mensaje ->formMensajeSistema();
		            $mensaje ->formMensajeSistemaShow("Ha ocurrido un error con su registro de mascota, inténtelo de nuevo.","<a href='../view/modulos/moduloSeguridad/formRegistrarCLiente.php'>Atrás</a>");
		}
		

	}
}
?>