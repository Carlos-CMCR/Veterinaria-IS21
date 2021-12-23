<?php

    session_start();

    if ($_SESSION['idrol']==4) {
        if(isset($_POST['btnGestionarUsuario']) or isset($_GET['btnGestionarUsuario'])){
        include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
        include_once("controllerGestionarusuario.php");
        $objFormGestionarUsuario = new formGestionarUsuarios;
        $objUsuarios = new controllerGestionarusuario;
        $objUsuarios = $objUsuarios->obtenerusuarios();
        $objFormGestionarUsuario -> EncabezadoShow();
        $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);
    }
    elseif(isset($_POST['btnRegistrarUsuario'])  or isset($_GET['btnRegistrarUsuario'])){
        include_once("controllerGestionarusuario.php");
        $objcontAgregarUsuario = new controllerGestionarusuario;
        $objcontAgregarUsuario -> mostrarformAgregarUsuario();
    }
    //AQUI JALAMOS LOS DATOS DEL ID Y LO MANDAMOS A LA VISTA EDITAR
    elseif(isset($_POST['btnEditarUsuario'])){
        $id=  $_POST['idusuario'];      
        include_once("../view/modulos/moduloAdministracion/formEditarUsuario.php");
        include_once("controllerGestionarusuario.php");
        $objcontEditarUsuario = new controllerGestionarusuario;
        $objFormEditarUsuario = new formEditarUsuario;
        $objFormEditarUsuario -> EncabezadoShow();
        $objcontEditarUsuario -> mostrarformEditarUsuario($id);
    }
    elseif(isset($_POST['btnActualizarUsuario'])){
        if( empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['rol']) ){
            include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Tiene que completar todos los campos","<a href='getGestionarUsuario.php?btnGestionarUsuario=presiono'>Volver Atras</a>");
        }
        else{

            $nombres= $_POST['nombres'];
            $apellidos= $_POST['apellidos'];
            $idusuario= $_POST['idusuario'];
            $rolseleccionado= $_POST['rol'];
            include_once("controllerGestionarusuario.php");
            $objActualizarUsuario= new controllerGestionarusuario;
            $objActualizarUsuario-> actualizarUsuario($idusuario,$nombres,$apellidos,$rolseleccionado);
       
        }
    }
    elseif(isset($_POST['btnAgregarUsuario']) ){

        if( empty($_POST['nombres']) || empty($_POST['apellidos']) ||  empty($_POST['rol']) || empty($_POST['respuesta']) ||  strlen($_POST['num_doc'])!=8 || empty($_POST['rol']) ){
            include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Tiene que completar todos los campos","<a href='getGestionarUsuario.php?btnRegistrarUsuario=presiono'>Volver Atras</a>");
        }
        else{
           // echo 'hola';
            $nombres=  $_POST['nombres'];
            $apellidos=  $_POST['apellidos'];
            $idrol=  $_POST['rol'];
            $num_doc=  $_POST['num_doc'];
            $pass_user=  $_POST['num_doc'];
            $respuesta=  $_POST['respuesta'];
            include_once("controllerGestionarusuario.php");
            $objcontAgregarUsuario = new controllerGestionarusuario;
            $objcontAgregarUsuario -> AgregarUsuario($nombres,$apellidos,$idrol,$num_doc,$pass_user,$respuesta);
                if(!$objcontAgregarUsuario){

                include_once("../shared/formMensajeSistema.php");
                $mensaje = new formMensajeSistema;
                $mensaje ->formMensajeSistema();
                $mensaje ->formMensajeSistemaShow("El DNI ingresado ya existe","<a href='getGestionarUsuario.php?btnRegistrarUsuario=presiono'>Volver Atras</a>");
                
                }else{
                   include_once("../shared/formMensajeSistema.php");
                    $mensaje = new formMensajeSistema;
                    $mensaje ->formMensajeSistema();
                    $mensaje ->formMensajeSistemaShowExito("El registro ha sido exitoso.","<a href='getGestionarUsuario.php?btnRegistrarUsuario=presiono'>Volver Atras</a>");
                }
        }
    }
    elseif(isset($_POST['btnCambiarEstado'])){
        $idusuario= $_POST['idusuario'];
        $estado= $_POST['estado'];
        include_once("controllerGestionarusuario.php");
        $objCambiarEstadoUsuario = new controllerGestionarusuario;
        $objCambiarEstadoUsuario->CambiarEstadoUsuario($idusuario,$estado);

    }
    elseif(isset($_POST['btnFiltrarUsuarios'])){
        $filtroestado = (isset($_POST['segunestado'])) ? $_POST['segunestado'] : '';
       // echo $filtroestado;
        if ($filtroestado=='activo') {
            include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
            include_once("controllerGestionarusuario.php");
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objUsuarios = new controllerGestionarusuario;
            $objUsuarios = $objUsuarios->obtenerusuariosfiltrados($filtroestado);
            $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);      
            
        }
        elseif($filtroestado=='inactivo'){
            include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
            include_once("controllerGestionarusuario.php");
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objUsuarios = new controllerGestionarusuario;
            $objUsuarios = $objUsuarios->obtenerusuariosfiltrados($filtroestado);
            $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);
        }
        else{
            include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
            include_once("controllerGestionarusuario.php");
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objFormGestionarUsuario -> EncabezadoShow();
            $objUsuarios = new controllerGestionarusuario;
            $objUsuarios = $objUsuarios->obtenerusuarios();
            $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);
        }
    }
    else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Ir al inicio</a>");
    }
    }else{
        session_destroy();
            include_once("../shared/formMensajeSistema.php");
            $mensaje = new formMensajeSistema;
            $mensaje ->formMensajeSistema();
            $mensaje ->formMensajeSistemaShow("Su sesión ha caducado por pillín.","<a href='../index.php'>Volver Atras</a>");
    }
    
?>