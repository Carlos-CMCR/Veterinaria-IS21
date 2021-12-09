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

	public function registrarCita($iduser,$nombre,$correo,$celular,$idMascota,$idServicio,$descripcion,$fecha){
		
		
		$SQL="INSERT INTO `citas` (`id_usuario`, `id_mascota`, `id_servicio`, `nombre_responsable`, `correo_responsable`, `celular_responsable`, `descripcion_cita`, `fecha_registro`, `fecha_cita`) VALUES ('$iduser', '$idMascota', '$idServicio', '$nombre', '$correo', '$celular', '$descripcion', current_timestamp(), '$fecha')";

		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();

			if ($resultado == true) {
				return 1;
			} else {
				return 0;
			}	

	}



}
		


?>