<?php
include_once("conecta.php");

class mascota extends Conecta{
	public function agregarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota,$iduser){
		
		
		$SQL = "INSERT INTO mascota(id_usuario,tipo,raza,nombre,edad,color) VALUES ('$iduser','$tipoMascota','$razaMascota','$nombreMascota','$edadMascota','$colorMascota')";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();

			if ($resultado == true) {
				return 1;
			} else {
				return 0;
			}	

	}

	public function listarMascotas(){
			$SQL="SELECT * FROM mascota, usuario WHERE id_usuario=idusuario";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;

	}

	public function obtenerMascotas($id){
		$SQL = "SELECT id_mascota,nombre FROM `mascota` WHERE id_usuario = '$id'";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();
		$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     	return $data;
	}



}
		


?>