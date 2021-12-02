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
}
		


?>