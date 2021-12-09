<?php 

if (isset($_POST['btnGestionarCitas'])) {
    include_once("../view/modulos/moduloAdministracion/formGestionarCitas.php");
    include_once('controllerGestionarCitas.php');
    $objFormGestionarCitas = new formGestionarCitas;
    $citas = controllerGestionarCitas::getListar();
    $objFormGestionarCitas -> EncabezadoShow();
    $objFormGestionarCitas -> formGestionarCitasShow($citas);

}

elseif (isset($_POST['btnEditarCita'])) {
    $id = $_POST['id_cita'];
    $nombre = $_POST['nombre_responsable'];
    $correo = $_POST['correo_responsable'];
    $celular = $_POST['celular_responsable'];
    $descripcion = $_POST['descripcion_cita'];
    $fecha_r = $_POST['fecha_registro'];
    $fecha_c = $_POST['fecha_cita'];
    
    include_once("../view/modulos/moduloAdministracion/formEditarCita.php");
	$editar = new formEditarCita;
	$editar -> formEditarCitaShow($id,$nombre,$correo,$celular,$descripcion,$fecha_r,$fecha_c);


}
elseif (isset($_POST['btnActualizar'])) {
    $id = $_POST['txtid'];
    $fecha_r = $_POST['txtfecha_r'];

	
    if ( !empty($_POST['txtnombre']) && !empty($_POST['txtcorreo']) && !empty($_POST['txtcelular']) && !empty($_POST['txtdescripcion']) && !empty($_POST['txtfecha_c'])  ) {
        $nombre = $_POST['txtnombre'];
        $correo = $_POST['txtcorreo'];
        $celular = $_POST['txtcelular'];
        $descripcion = $_POST['txtdescripcion'];
        $fecha_c = $_POST['txtfecha_c'];
        include_once("controllerGestionarCitas.php");
	    $retornado= controllerGestionarCitas::actualizarCita($id,$nombre,$correo,$celular,$descripcion,$fecha_c);
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShowExito("Los datos han sido actualizados correctamente","<form action='getGestionarCitas.php' method='POST'>                  
                            <input class='link' type='submit' name='btnGestionarCitas' value='Ok'>
                        </form>");
	} else {
        
        $nombre = $_POST['txtnombre_r'];
        $correo = $_POST['txtcorreo_r'];
        $celular = $_POST['txtcelular_r'];
        $descripcion = $_POST['txtdescripcion_r'];
        $fecha_c = $_POST['txtfecha_c_r'];
        

		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShow("Debe completar todos los campos","<form action='getGestionarCitas.php' method='POST'> 
        <input type='hidden' name='id_cita' value='$id'> 
        <input type='hidden' name='nombre_responsable' value='$nombre'> 
        <input type='hidden' name='correo_responsable' value='$correo'> 
        <input type='hidden' name='celular_responsable' value='$celular'> 
        <input type='hidden' name='descripcion_cita' value='$descripcion'> 
        <input type='hidden' name='fecha_registro' value='$fecha_r'> 
        <input type='hidden' name='fecha_cita' value='$fecha_c'>                 
        <input class='link' type='submit' name='btnEditarCita' value='Atras'>
    </form>");
	}

}

elseif (isset($_POST['btnEliminarCita'])) {
    $id = $_POST['idcita'];
    include_once('controllerGestionarCitas.php');
    $eliminar = controllerGestionarCitas::delete($id);
    if ($eliminar ==1) {
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShowExito("La cita ha sido eliminado completamente de la base de datos","<form action='getGestionarCitas.php' method='POST'>
                    <input class='link' type='submit' name='btnGestionarCitas'  value='Ok'>
                </form>");
	} else {
		include_once("../shared/formMensajeSistema.php");
		$mensaje = new formMensajeSistema;
	    $mensaje ->formMensajeSistema();
	    $mensaje ->formMensajeSistemaShow("Ha ocurrido un error","<form action='getGestionarCitas.php' method='POST'>                  
        <input class='link' type='submit' name='btnGestionarCitas' value='Atras'>
    </form>");
	}
    

}


else{
	include_once("../shared/formMensajeSistema.php");
	$mensaje = new formMensajeSistema;
    $mensaje ->formMensajeSistema();
    $mensaje ->formMensajeSistemaShow("Acceso no permitido!!!","<a href='../index.php'>Volver Atras</a>");
}


?>