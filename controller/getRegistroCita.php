<?php

	function validarCampos($nombre,$correo,$celular,$idMascota,$idServicio,$descripcion,$fecha){

		if (empty($_POST['txtNombre']) || empty($_POST['txtCorreo']) || empty($_POST['txtCelular']) || empty($_POST['txtCelular']) || empty($_POST['descripcion'])) {
			return 0;
		}elseif ($_POST['selectNomMascota']=="cero") {
			return 1;
		}elseif ($_POST['selectTipoServicio']=="cero") {
			return 3;
		}else{
			return 4;}
		

	}

	session_start();

	if ((isset($_SESSION['user']) && isset($_SESSION['idrol'])) or isset($_POST['btnRegistrar'])){
		$iduser = $_SESSION['iduser'];
		$nombre = $_POST['txtNombre'];
		$correo = $_POST['txtCorreo'];
		$celular = $_POST['txtCelular'];
		$idMascota = $_POST['selectNomMascota'];
		$idServicio = $_POST['selectTipoServicio'];
		$descripcion = $_POST['descripcion'];
		$fecha = $_POST['fechaCita'];

		$return =validarCampos($nombre,$correo,$celular,$idMascota,$idServicio,$descripcion,$fecha);
		if ($return==0) {
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Campos de textos vacíos","<a href='getExtraerServicios.php'>Volver Atras</a>");		
        } elseif($return==1) {
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Seleccione o registre una mascota en caso no tenga una","<a href='getExtraerServicios.php'>Volver Atras</a>");
		}elseif($return==3) {
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Seleccione un tipo de servicio","<a href='getExtraerServicios.php'>Volver Atras</a>");
		}elseif($return==4) {
			include_once("../model/eMascota.php");
			$enviar = new mascota;
			$returned = $enviar -> registrarCita($iduser,$nombre,$correo,$celular,$idMascota,$idServicio,$descripcion,$fecha);

			if ($returned==1) {
				include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShowExito("El registro de su cita ha sido exitoso, en el transcurso del día se estarán comunicando con ud vía correo o celular para coordinar la hora.","<a href='getExtraerServicios.php'>Volver Atras</a>");
			} elseif ($returned==0) {
				include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Ha ocurrido un error en el registro. Inténtelo nuevamente.","<a href='getExtraerServicios.php'>Volver Atras</a>");
			}
			
		}
		
	} else {
		echo "La sessión ha caducado";
	}
?>


