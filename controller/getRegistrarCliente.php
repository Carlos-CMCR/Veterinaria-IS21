<?php
	

	
			

		

		//VALIDACIÓN DE LOS CAMPOS DE LOS FORMULARIOS Y ENVIÓ A LA BD
		if(empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtDni']) || empty($_POST['txtCelular']) || empty($_POST['txtCorreo']) || empty($_POST['txtPass1']) || empty($_POST['txtPass2'])){
			
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Ingrese todos los campos","<a href='../view/modulos/moduloSeguridad/formRegistrarCliente.php'>Atrás</a>");
		}elseif (!isset($_POST['check'])) {
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("No ha acepado los términos y condiciones","<a href='../view/modulos/moduloSeguridad/formRegistrarCliente.php'>Atrás</a>");
		}
		 elseif (filter_var($_POST['txtCorreo'], FILTER_VALIDATE_EMAIL)){

			

			if (strlen($_POST['txtPass1'])>=8 && strlen($_POST['txtPass1'])>=8) {
				if (trim($_POST['txtPass1'])==trim($_POST['txtPass2'])) {
				
				$nombre=$_POST['txtNombre'];		
				$apellido=$_POST['txtApellido'];
				$dni=$_POST['txtDni'];
				$celular=$_POST['txtCelular'];
				$correo=$_POST['txtCorreo'];
				$pass=trim($_POST['txtPass1']);

				

				include_once("controllerRegistroCliente.php");
				$registro= new controllerRegistro;
				$registro-> registrarCliente($nombre,$apellido,$dni,$celular,$correo,$pass);

			} else {
					include_once("../shared/formMensajeSistema.php");
		            $mensaje = new formMensajeSistema;
		            $mensaje ->formMensajeSistema();
		            $mensaje ->formMensajeSistemaShow("Ingrese correctamente las contraseñas","<a href='../view/modulos/moduloSeguridad/formRegistrarCliente.php'>Atrás</a>");
			}
			} else {
					include_once("../shared/formMensajeSistema.php");
		            $mensaje = new formMensajeSistema;
		            $mensaje ->formMensajeSistema();
		            $mensaje ->formMensajeSistemaShow("La contraseña no debe tener menos de 8 letras.","<a href='../view/modulos/moduloSeguridad/formRegistrarCliente.php'>Atrás</a>");
			}
			
			
		}else{
			include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Correo inválido","<a href='../view/modulos/moduloSeguridad/formRegistrarCliente.php'>Atrás</a>");
		}


?>