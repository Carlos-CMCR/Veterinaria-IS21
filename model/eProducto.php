<?php
include_once("conecta.php");
class eProducto extends Conecta{
	
	public function listarProductos(){
			$SQL="SELECT * FROM producto";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;

	}

	public function agregarProducto($nomproducto,$preproducto,$prepproducto,$stok,$estado,$descripcion,$ruta){
		$SQL = "INSERT INTO producto(foto_producto,nom_producto,prec_uni_producto,prec_promo_producto,tot_cant_producto,estado_producto,descrip_producto) VALUES ('$ruta','$nomproducto','$preproducto','$prepproducto','$stok','$estado','$descripcion');";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();		
				
     	if($resultado == true) return (1);
			else return (0);
	}

	public function eliminarServicio($idproducto){
		

		$SQL = "DELETE FROM producto WHERE idproducto = '$idproducto'";
		$resultado = mysqli_query($this->conectar(),$SQL);
		$this->desconectar();		
				
     	if($resultado == true) return (1);
			else return (0);


	}

	public function listarServicios(){
			$SQL="SELECT * FROM producto";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;

	}
}

?>
