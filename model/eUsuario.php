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

				$_SESSION['iduser']=$row['idusuario'];
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


			


			$SQL = "INSERT INTO usuario (nombres,apellidos,num_doc,celular,correo,respuesta,pass_user,estado_cuenta) VALUES ('$nombre','$apellido','$dni','$celular','$correo','rdefault','$pass','activo')";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();	

			if ($resultado==TRUE) {
				$SQL3 = "SELECT usuario.idusuario FROM usuario WHERE num_doc='$dni' ";
				$resultado = mysqli_query($this->conectar(),$SQL3);
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


		public function actualizarUser($nombre,$apellido,$dni,$celular,$nameimg){
			
			$SQL = "UPDATE `usuario` SET `nombres` = '$nombre',`apellidos` = '$apellido',`celular` = '$celular' WHERE `usuario`.`num_doc` = $dni";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();
			
			if($nameimg==null){
				
			}else{
				$SQL = "UPDATE `usuario` SET `imgperfil` = '$nameimg' WHERE `usuario`.`num_doc` = $dni";
				$resultado = mysqli_query($this->conectar(),$SQL);
				$this->desconectar();
			}
				
	     	if($resultado == true) return (1);
				else return (0);

		}


		public function obtenerusuarios(){
			$SQL="SELECT usuario.idusuario , usuario.nombres, usuario.apellidos, usuario.num_doc, rol.rol, usuario.estado_cuenta, usuario.fecha_registro, usuario.fecha_modificacion FROM usuario, detalle_rol,rol where usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol ORDER BY usuario.idusuario";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;
			/*for($i = 0; $i < $num_registros; $i++)
			$row = mysqli_fetch_array($resultado);
			return $row;*/
		}

		public function CambiarEstadoUsuario($idusuario,$nuevoestado){

			if($nuevoestado=='activo'){
			$SQL = "UPDATE usuario SET estado_cuenta='inactivo' WHERE idusuario='$idusuario' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			}
			else{
			$SQL = "UPDATE usuario SET estado_cuenta='activo' WHERE idusuario='$idusuario' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			}
			//var_dump($resultado);
		}

		public function obtenerusuariosfiltrados($filtroestado){
			//	echo $filtroestado;
				$SQL="SELECT * FROM usuario, detalle_rol,rol where usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol AND usuario.estado_cuenta='$filtroestado' ";
				$resultado = mysqli_query($this->conectar(),$SQL);
				$num_registros = mysqli_num_rows($resultado);
				$this->desconectar();
				$data = $resultado ->fetch_all(MYSQLI_ASSOC);
				 return $data;
			}


		public function ObtenerRoles(){
			$SQL = "SELECT * FROM rol ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$roles = $resultado ->fetch_all(MYSQLI_ASSOC);
			return $roles;
		}


		public function VerificarUsuarioExistente($num_doc){
			$SQL = "SELECT * FROM usuario WHERE num_doc='$num_doc' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();
			$aciertos = mysqli_num_rows($resultado);
			if($aciertos==1){
				return(1);
			
			}else{
				return(0);
			}
		}


		public function AgregarUsuario($nombres,$apellidos,$num_doc,$pass_user,$respuesta){
			$SQL = "INSERT INTO usuario (nombres,apellidos,pass_user,num_doc,respuesta,estado_cuenta) VALUES ('$nombres','$apellidos','$pass_user','$num_doc','$respuesta','activo')";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$SQL = "SELECT usuario.idusuario FROM usuario WHERE num_doc='$num_doc' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			$idusuario=$row['idusuario'];
			return $idusuario;

		}


		public function AgregarRol($idusuario,$idrol){
			$SQL = "INSERT INTO detalle_rol (idusuario,idrol) VALUES ('$idusuario','$idrol')";
			$resultado = mysqli_query($this->conectar(),$SQL);
		}

	
}



?>