<?php
class controllerRegistro{

	public function registrarCliente($nombre,$apellido,$dni,$celular,$correo,$pass){

				
				include_once("../model/eUsuario.php");
				$registrar = new Usuario;
				$retornado = $registrar -> agregarCliente($nombre,$apellido,$dni,$celular,$correo,$pass);

				if ($retornado == 1) {
					include_once("../shared/formMensajeSistema.php");
		            $mensaje = new formMensajeSistema;
		            $mensaje ->formMensajeSistema();
		            $mensaje ->formMensajeSistemaShowExito("Se ha registrado correctamente. Inicie sesión para comprobar","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Atrás</a>");
				} elseif ($retornado == 0) {
					include_once("../shared/formMensajeSistema.php");
		            $mensaje = new formMensajeSistema;
		            $mensaje ->formMensajeSistema();
		            $mensaje ->formMensajeSistemaShow("El correo ingresado o DNI ya existe, inténtelo de nuevo.","<a href='../view/modulos/moduloSeguridad/formRegistrarCLiente.php'>Atrás</a>");
				}

	}
}
?>