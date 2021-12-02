<?php
class controllerRegistroMascota{

	public function registrarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota) {
		include_once("../model/eMascota.php");
		$enviar = new mascota;
		$enviar -> agregarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota);

	}
}
?>