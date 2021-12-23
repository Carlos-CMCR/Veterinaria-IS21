<?php
session_start();
if (isset($_POST['btnActualizar']) or (isset($_SESSION["user"]) && isset($_SESSION["contrasena"]))) {
	
	$nombre = $_POST['nombres'];
	$apellido = $_POST['apellidos'];
	$dni = $_SESSION['dni'];
	$celular = $_POST['Celular'];

	

	$name = $_FILES['imgperfil']['name'];
    $tmp_name = $_FILES['imgperfil']['tmp_name'];
    $ruta = '../view/img/'.$name;
    move_uploaded_file($tmp_name,$ruta);


	

	include_once("../model/eUsuario.php");
	$enviar = new Usuario;
	$retornado=$enviar -> actualizarUser($nombre,$apellido,$dni,$celular,$name);

	if ($retornado==1) {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShowExito("La actualización de su registro fue exitosa","<a href='../index.php'>Atrás</a>");
	} elseif($retornado==0) {
		include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("Hubo un error, intenta nuevamente","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Atrás</a>");
	}
	


	
	

	
} else {
	include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShow("La sesión ha caducado, ingrese nuevamente","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Atrás</a>");
	
}

?>