<?php


if (empty($_POST['txtNombreMascota']) || empty($_POST['txtEdad']) || empty($_POST['selectColor']) || empty($_POST['txtRaza']) || empty($_POST['selectTipo'])) {
	
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Ingrese todos los campos","<a href='../view/modulos/moduloSeguridad/formRegistrarMascota.php'>Atrás</a>");

} elseif(($_POST['selectColor'])=="nel" or ($_POST['selectTipo'])=="nel") {

			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Seleccione todos los campos","<a href='../view/modulos/moduloSeguridad/formRegistrarMascota.php'>Atrás</a>");
} else{
	$nombreMascota = $_POST['txtNombreMascota'];
	$edadMascota = $_POST['txtEdad'];
	$colorMascota = $_POST['selectColor'];
	$razaMascota = $_POST['txtRaza'];
	$tipoMascota = $_POST['selectTipo'];
	include_once("controllerRegistrarMascota.php");
	$enviar = new controllerRegistroMascota;
	$enviar -> registrarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota);
}



?>