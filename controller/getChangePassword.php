<?php
function validarCampos($pass,$newpass1,$newpass2){
	if (strlen($pass)==0 or strlen($newpass1)==0 or strlen($newpass2)==0) {
		return 1;
	}elseif (strlen($pass)<8 or strlen($newpass1)<8 or strlen($newpass2)<8) {
		return 2;
	}elseif($_SESSION['pass']==$pass){
		if($newpass1==$newpass2){
			return 4;
		}elseif($newpass1!=$newpass2){
			return 5;
		}
	}else{
		return 3;
	}
	

}
session_start();
if (isset($_POST['btnActualizar'])){
	
	$pass = $_POST['password'];
	$newpass1 = $_POST['new_password1'];
	$newpass2 = $_POST['new_password2'];
	$retornado = validarCampos($pass,$newpass1,$newpass2);

	if ($retornado==1) {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Los campos están vacíos.","<a href='../view/modulos/moduloSeguridad/formChangePassword.php'>Atrás</a>");
	}elseif ($retornado==2) {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Ingrese 8 carácteres como mínimo.","<a href='../view/modulos/moduloSeguridad/formChangePassword.php'>Atrás</a>");
	}elseif($retornado==3){	
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Contraseña actual incorrecta.","<a href='../view/modulos/moduloSeguridad/formChangePassword.php'>Atrás</a>");
	}elseif ($retornado==4) {
		
		$user = $_SESSION['user'];
		include_once("../model/eUsuario.php");
		$enviar= new Usuario;
		$returned=$enviar -> modificarPass($newpass1,$user);

		if ($returned==1) {
			session_destroy();
			include_once("../shared/formMensajeSistema.php");
	        $mensajeo = new formMensajeSistema;
	        $mensajeo ->formMensajeSistema();
	        $mensajeo ->formMensajeSistemaShowExito("La contraseña se ha modificado correctamente. Ingrese nuevamente","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Ir al login</a>");
		} else {
			include_once("../shared/formMensajeSistema.php");
	        $mensajeo = new formMensajeSistema;
	        $mensajeo ->formMensajeSistema();
	        $mensajeo ->formMensajeSistemaShow("Ha ocurrido un error. Inténtelo nuevamente.","<a href='../view/modulos/moduloSeguridad/formChangePassword.php'>Atrás</a>");
		}
		
		
	}elseif ($retornado==5) {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Los campos de las nuevas contraseñas no coinciden.","<a href='../view/modulos/moduloSeguridad/formChangePassword.php'>Atrás</a>");
	}
	

} else {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Acceso no permitido","<a href='../view/modulos/moduloSeguridad/formChangePassword.php'>Atrás</a>");
}

?>