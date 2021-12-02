<?php
class controllerGestionarProductos{

	public function agregarProductos($nomproducto,$preproducto,$prepproducto,$stok,$estado,$descripcion,$ruta){

		include_once("../model/eProducto.php");
		$agregar = new eProducto;
		$agregar -> agregarProducto($nomproducto,$preproducto,$prepproducto,$stok,$estado,$descripcion,$ruta);
	}
}
?>