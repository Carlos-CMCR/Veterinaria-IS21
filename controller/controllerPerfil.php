<?php
class controllerPerfil{

	public function mostrarDatosPerfil(){
		$dni = $_SESSION["dni"];

		include_once("../model/eUsuario.php");
		$mostrar = new Usuario;
		$retornado = $mostrar -> mostrarDatosPerfil($dni);

		include_once("../view/modulos/moduloUsuario/formUsuarioPerfil.php");		
		$enviar = new formUsuarioPerfil;
		$enviar -> formUsuarioPerfilShow($retornado);

	}

	public function editarDatosPerfil(){

		
		$dni = $_SESSION["dni"];

		include_once("../model/eUsuario.php");
		$mostrar = new Usuario;
		$retornado = $mostrar -> mostrarDatosPerfil($dni);

		include_once("../view/modulos/moduloUsuario/formEditarUsuarioPerfil.php");
		
		$enviar = new formEditarUsuarioPerfil;
		$enviar -> formEditarUsuarioPerfilShow($retornado);

	}
}
?>