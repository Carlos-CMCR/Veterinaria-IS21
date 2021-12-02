<?php
echo $_POST['txtNombreMascota'];
echo $_POST['txtEdad'];
echo $_POST['selectColor'];
echo $_POST['txtRaza'];
echo $_POST['selectTipo'];

if (empty($_POST['txtNombreMascota']) || empty($_POST['txtEdad']) || empty($_POST['selectColor']) || empty($_POST['txtRaza']) || empty($_POST['selectTipo'])) {
	
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Ingrese todos los campos","<a href='../view/modulos/moduloSeguridad/formRegistrarCliente.php'>Atrás</a>");

} elseif() {
	# code...
}



?>