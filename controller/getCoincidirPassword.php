<?php
function validarCampos($pass1,$pass2){

	if (strlen($pass1)==0 or strlen($pass2)==0) {
		return 0;
	} elseif ($pass2==$pass1) {
		return 1;
	} else{
		return 2;
	}
	

	


}



if (isset($_POST['btnActualizar'])) {
	$pass1 = $_POST['new_password'];
	$pass2 = $_POST['repet_password'];

	$retornado =validarCampos($pass1,$pass2);

	if ($retornado ==0){
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Los campos están vacíos","<a href='../view/modulos/moduloSeguridad/formCambiarClave.php'>Atrás</a>");

	} elseif($retornado == 1) {
		include_once("controllerCambiarPass.php");
		$cambiar = new controllerCambiarPass;
		$cambiar -> modificarPass($pass1);

	} elseif($retornado == 2){
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Las contraseñas no coinciden","<a href='../view/modulos/moduloSeguridad/formCambiarClave.php'>Atrás</a>");
	}
	

} else {
	echo "Mensjae de error";
}

?>