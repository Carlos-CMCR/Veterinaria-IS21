<?php
function validarCampos($correo){
	if (strlen($correo)==0) {
		return 0;
	} else {
		return 1;
	}
	


}


if (isset($_POST['btnBuscar'])) {

	$log = $_POST['correo'];
	$resultado=validarCampos($log);
	if ($resultado==0) {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Campo vacío.php","<a href='../view/modulos/moduloSeguridad/formVerificarUsuario.php'>Atrás</a>");

	} elseif($resultado==1) {

		
		include_once("controllerCambiarPass.php");
		$recuperar = new controllerCambiarPass;
		$recuperar -> buscarUsuario($log);
	}
	

	
	
} else {
	    include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Acceso no permitido.","<a href='../view/modulos/moduloSeguridad/formVerificarUsuario.php'>Atrás</a>");
}

?>