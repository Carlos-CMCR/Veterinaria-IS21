<?php
class controllerCambiarPass{

	public function buscarUsuario($log){

		include_once("../model/eUsuario.php");
		$buscar = new Usuario;
		$retornado = $buscar ->buscarUsuario($log);	
		if ($retornado==null) {
			include_once("../shared/formMensajeSistema.php");
	        $mensajeo = new formMensajeSistema;
	        $mensajeo ->formMensajeSistema();
	        $mensajeo ->formMensajeSistemaShow("Usuario no encontrado.","<a href='../view/modulos/moduloSeguridad/formVerificarUsuario.php'>Atrás</a>");

		} elseif($retornado!=null) {
			
			if (isset($_SESSION['user']) && isset($_SESSION['respuesta']) ) {
				
				header("location: ../view/modulos/moduloSeguridad/formPreguntaSeguridad.php");
			} else {
				include_once("../shared/formMensajeSistema.php");
		        $mensajeo = new formMensajeSistema;
		        $mensajeo ->formMensajeSistema();
		        $mensajeo ->formMensajeSistemaShow("Ha ocurrido un error, vuelve a intentarlo.","<a href='../view/modulos/moduloSeguridad/formVerificarUsuario.php'>Atrás</a>");

			}
			
			
		}
		
	}

	public function modificarPass($pass){
		session_start();
		
		
		if (isset($_SESSION['respuesta']) && isset($_SESSION['user'])) {
			$user=$_SESSION['user'];
			include_once("../model/eUsuario.php");;
			$cambiar= new Usuario;
			$retornado = $cambiar -> modificarPass($pass,$user);

			if ($retornado!=1) {
				include_once("../shared/formMensajeSistema.php");
		        $mensajeo = new formMensajeSistema;
		        $mensajeo ->formMensajeSistema();
		        $mensajeo ->formMensajeSistemaShow("Ha ocurrido un error en la base de datos.","<a href='../view/modulos/moduloSeguridad/formVerificarUsuario.php'>Atrás</a>");

			} elseif ($retornado==1) {
				session_destroy();
				include_once("../shared/formMensajeSistema.php");
		        $mensajeo = new formMensajeSistema;
		        $mensajeo ->formMensajeSistema();
		        $mensajeo ->formMensajeSistemaShowExito("Su contraseña ha sido modificada correctamente.","<a href='../index.php'>Ir al inicio</a>");
			}
			
		} else {
				include_once("../shared/formMensajeSistema.php");
		        $mensajeo = new formMensajeSistema;
		        $mensajeo ->formMensajeSistema();
		        $mensajeo ->formMensajeSistemaShow("Ha ocurrido un error, inténtalo nuevamente.","<a href='../index.php'>Ir al inicio</a>");
		}
		
	}
}
?>