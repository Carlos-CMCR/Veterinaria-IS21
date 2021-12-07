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
		echo "Campos vacíos";
	}elseif ($retornado==2) {
		echo "8 carácteres como mínimo";
	}elseif($retornado==3){	
		echo "CONTRA DE LA BD INCORRECTA";
	}elseif ($retornado==4) {
		echo "Contraseñas IGUALES";
		$user = $_SESSION['user'];
		include_once("../model/eUsuario.php");
		$enviar= new Usuario;
		$returned=$enviar -> modificarPass($newpass1,$user);

		if ($returned==1) {
			echo "Se ha cambiado las contraseñas correctamente";
		} else {
			echo "Ha ocurrido un error";
		}
		
		
	}elseif ($retornado==5) {
		echo "Contraseñas DIFERENTES";
	}
	

} else {
	echo "Nelson";
}

?>