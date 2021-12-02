<?php
class mascota{
	public function agregarMascota($nombreMascota,$edadMascota,$colorMascota,$razaMascota,$tipoMascota){
		echo $nombreMascota;
		echo $edadMascota;
		echo $colorMascota;
		echo $razaMascota;
		echo $tipoMascota;

		$SQL = "INSERT INTO mascota (nombres,apellidos,num_doc,celular,correo,pass_user,estado_cuenta) VALUES ('$nombre','$apellido','$dni','$celular','$correo','$pass','activo')";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();

	}
}
		


?>