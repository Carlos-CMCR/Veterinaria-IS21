<?php 
include_once("conecta.php");
class Citas extends Conecta{

    public function select(){

        $SQL="SELECT * FROM citas";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;

    }
    
    public function actualizar($id,$nombre,$correo,$celular,$descripcion,$fecha_c){
		$SQL = "UPDATE citas SET 
        nombre_responsable = '$nombre',
        correo_responsable = '$correo',
        celular_responsable = '$celular',
        descripcion_cita = '$descripcion', 
        fecha_cita = '$fecha_c'
        where  id_cita ='$id'
        ";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();		
				
     	if($resultado == true){return (1);} 
			else {return (0);}
	}
    public function delete($id){
		$SQL = "DELETE FROM citas WHERE id_cita = '$id';
        ";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();		
				
     	if($resultado == true){return (1);} 
			else {return (0);}
	}








}

?>