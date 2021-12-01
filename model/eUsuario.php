<?php
include_once("conecta.php");

class Usuario extends Conecta{

	public function verificarUsuario($correo,$password){
		
		$SQL ="SELECT * FROM usuario, detalle_rol,rol WHERE correo='$correo' AND pass_user='$password' AND estado_cuenta='activo' AND usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		$this->desconectar();
		session_start();

		if(is_array($row)){
				
				$_SESSION['nombre']=$row['nombres'];
				$_SESSION['apellido']=$row['apellidos'];
				$_SESSION['user']=$row['correo'];
				$_SESSION['pass']=$row['pass_user'];			
				$_SESSION['rol']=$row['rol'];
				$_SESSION['dni']=$row['num_doc'];
				$_SESSION['respuesta']=$row['respuesta'];
				$_SESSION['idrol']=$row['idrol'];
				$rol=$_SESSION['idrol'];
				return $rol;
			}else{
				return 0;
			}

	}

	public function mostrarDatosPerfil($dni){
			

			$SQL = "SELECT * FROM usuario WHERE num_doc= '$dni'";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;


		}

	public function buscarUsuario($log){
		
		
		$SQL = "SELECT * FROM usuario WHERE correo= '$log'";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		$this->desconectar();
		
		session_start();
		is_array($row);
		$_SESSION['user']=$row['correo'];
		$_SESSION['respuesta']=$row['respuesta'];
		
		return $row;


	}

	public function modificarPass($pass,$user){

		
		$SQL = "UPDATE usuario SET pass_user='$pass' WHERE correo='$user'";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();
		
		if ($resultado==TRUE) {
			return 1;
		} else {
			return 0;
		}
		
	}


	public function agregarCliente($nombre,$apellido,$dni,$celular,$correo,$pass){


			


			$SQL = "INSERT INTO usuario (nombres,apellidos,num_doc,celular,correo,pass_user,estado_cuenta) VALUES ('$nombre','$apellido','$dni','$celular','$correo','$pass','activo')";
			$resultado = mysqli_query($this->conectar(),$SQL);

			if ($resultado==TRUE) {
				$SQL = "SELECT usuario.idusuario FROM usuario WHERE num_doc='$dni' ";
				$resultado = mysqli_query($this->conectar(),$SQL);
				$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
				$idusuario=$row['idusuario'];
				$idrol=1;
				$SQL2 = "INSERT INTO detalle_rol (idusuario,idrol,estado) VALUES ('$idusuario','$idrol','activo')";
				$resultado2 = mysqli_query($this->conectar(),$SQL2);
				return 1;
			} else {
				return 0;
			}
			
		}

	
}



?>