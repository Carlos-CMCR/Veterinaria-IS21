<?php
if (isset($_POST['btnGestionarMascotas'])) {
	include_once("../model/eMascota.php");
	$mascota = new mascota;
	$retornado = $mascota -> listarMascotas();

	include_once("../view/modulos/moduloAdministracion/formGestionarMascotas.php");
	$enviar = new formGestionarProductos;
	$enviar -> formGestionarProductosShow($retornado);

}
elseif (isset($_POST['btnEditarProducto'])) {
	$id = $_POST['idproducto'];
	$fotoproducto = $_POST['fotoproducto'];
	$nombreproducto = $_POST['nombreproducto'];
	$precioproducto = $_POST['precioproducto'];
	$preciopromo = $_POST['preciopromo'];
	$stok = $_POST['stok'];
	$estado = $_POST['estado'];
	$descripcion = $_POST['descripcion'];

	
	include_once("../view/modulos/moduloAdministracion/formEditarProducto.php");
	$editar = new formEditarProducto;
	$editar -> formEditarProductoShow($id,$fotoproducto,$nombreproducto,$precioproducto,$preciopromo,$stok,$estado,$descripcion);

	
}
elseif (isset($_POST['btnAgregar'])) {
	
	include_once("../view/modulos/moduloAdministracion/formAgregarProducto.php");
	$agregar = new formAgregarProducto;
	$agregar -> formAgregarProductoShow();
}
elseif (isset($_POST['btnAgregarBD'])) {
	
	$nomproducto = $_POST['txtnombreproducto'];
	$preproducto = $_POST['txtprecioproducto'];
	$prepproducto = $_POST['txtpreciopromo'];
	$stok = $_POST['txtstok'];
	$estado = $_POST['txtestado'];
	$descripcion = $_POST['txtdescripcion'];
	$ruta = $_POST['txtimagen'];


	
	include_once("controllerGestionarProductos.php");
	$agregarp = new controllerGestionarProductos;
	$retornado= $agregarp -> agregarProductos($nomproducto,$preproducto,$prepproducto,$stok,$estado,$descripcion,$ruta);
	if ($retornado ==null) {
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShowExito("El producto se ha agregado correctamente","<form action='getGestionarProductos.php' method='POST'>                  
                            <input class='btn btn-primary' type='submit' name='btnGestionarProductos' value='Atras'>
                        </form>");
	} else {
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShow("Ha ocurrido un error","<a href='../index.php'>Volver Atras</a>");
	}
	
}

// eliminar servicio
elseif (isset($_POST['btnEliminarServicio'])) {
	
	$idproducto= $_POST['idproducto'];;

	include("../model/eProducto.php");
	$eliminar = new eProducto;
	$retornado =$eliminar -> eliminarServicio($idproducto);

	if ($retornado ==1) {
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShowExito("El servicio de ha eliminado completamente de la base de datos","<form action='getGestionarProductos.php' method='POST'>
                    <input type='submit' class='btn btn-primary' name='btnGestionarProductos' id='btnGestionarProductos' value='Atrás'>
                </form>");
	} else {
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShow("Ha ocurrido un error","<a href='../index.php'>Volver Atras</a>");
	}
	
}
else{
	include_once("../shared/formMensajeSistema.php");
	$mensaje = new formMensajeSistema;
    $mensaje ->formMensajeSistema();
    $mensaje ->formMensajeSistemaShow("Acceso no permitido!!!","<a href='../index.php'>Volver Atras</a>");
}

?>