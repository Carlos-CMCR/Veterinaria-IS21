<?php
    class controllerGestionarUsuario{

        public function obtenerusuarios(){
            include_once('../model/eUsuario.php');
            $usuarios = new Usuario();
            $obtenerusuarios = $usuarios->obtenerusuarios();
            return $obtenerusuarios;
        }
       /* public function obtenerusuariosfiltrados($filtroestado){
            include_once("formRegistrarUsuario.php");
            include_once('../model/usuario.php');
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objFormGestionarUsuario -> EncabezadoShow();
            $usuarios = new Usuario();
            $obtenerusuarios = $usuarios->obtenerusuariosfiltrados($filtroestado);
            return $obtenerusuarios;
        }*/
        public function mostrarformAgregarUsuario(){
            include_once("../view/modulos/moduloAdministracion/formRegistrarUsuario.php");
            include_once('../model/eUsuario.php');
            $roles= new usuario;
            $roles = $roles->ObtenerRoles();
            $objFormAgregarUsuario = new FormAgregarUsuario;
            $objFormAgregarUsuario -> EncabezadoShow();
            $mensaje=null;
            $objFormAgregarUsuario -> FormAgregarUsuarioShow($roles,$mensaje);
        }
        public function mostrarformEditarUsuario($id){
            include_once("../view/modulos/moduloAdministracion/formEditarUsuario.php");
            include_once('../model/eUsuario.php');
            $usuarioEditar = new usuario;
            $row = $usuarioEditar -> ObtenerUsuarioporID($id);
            $roles= new usuario;
            $roles = $roles->ObtenerRoles();
            $objFormAgregarUsuario = new FormEditarUsuario;  
            $objFormAgregarUsuario -> EncabezadoShow();
            $objFormAgregarUsuario -> FormEditarUsuarioShow($row,$roles);
        }
        public function actualizarUsuario($idusuario,$nombres,$apellidos,$rolseleccionado){
            include_once('../model/eUsuario.php');
            $usuarioEditar = new usuario;
            $rolactual= $usuarioEditar -> ObtenerRolporID($idusuario);
            if($rolactual['rol']==$rolseleccionado){
                $usuarioEditar=new usuario;
                $usuarioEditar->ActualizarUsuario($idusuario,$nombres,$apellidos);
            }
            else{
              //  $usuarioEditar=new usuario;
              //  $usuarioEditar->RegistrarCambio($idusuario,$rolseleccionado);
                $usuarioEditar=new usuario;
                $a=$usuarioEditar->ActualizarRol($idusuario,$rolseleccionado);
                echo $a;
              /*  $usuarioEditar=new usuario;
                $usuarioEditar->ActualizarUsuario($idusuario,$nombres,$apellidos);*/
            }
            include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
            include_once("controllerGestionarusuario.php");
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objUsuarios = new controllerGestionarUsuario;
            $objUsuarios = $objUsuarios->obtenerusuarios();
            $objFormGestionarUsuario -> EncabezadoShow();
            $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);

        }
        public function AgregarUsuario($nombres,$apellidos,$idrol,$num_doc,$pass_user,$respuesta){
            include_once('../model/eUsuario.php');
            $usuarioAgregar = new usuario;
            $idusuario=$usuarioAgregar->VerificarUsuarioExistente($num_doc);
            if($idusuario=='0'){
            $usuarioAgregar = new usuario;      
            $idusuario=$usuarioAgregar->AgregarUsuario($nombres,$apellidos,$num_doc,$pass_user,$respuesta);
            $objAgregarRol = new usuario;
            $objAgregarRol->AgregarRol($idusuario,$idrol);
            include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
            include_once("controllerGestionarusuario.php");
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objUsuarios = new controllerGestionarUsuario;
            $objUsuarios = $objUsuarios->obtenerusuarios();
            $objFormGestionarUsuario -> EncabezadoShow();
            $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);
            }else{
                return false;

            }

        }
        public function CambiarEstadoUsuario($idusuario,$nuevoestado){
            include_once('../model/eUsuario.php');
            $estadoUsuario=new usuario;
            $estadoUsuario->CambiarEstadoUsuario($idusuario,$nuevoestado);
            include_once("../view/modulos/moduloAdministracion/formGestionarUsuario.php");
            include_once("controllerGestionarusuario.php");
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objUsuarios = new controllerGestionarUsuario;
            $objUsuarios = $objUsuarios->obtenerusuarios();
            $objFormGestionarUsuario -> EncabezadoShow();
            $objFormGestionarUsuario -> formGestionarUsuariosShow($objUsuarios);
        }
        /* GFGHFGFJHGFFJFGHJFGJHJ */
        public function obtenerusuariosfiltrados($filtroestado){
            include_once("../view/modulos/moduloAdministracion/formRegistrarUsuario.php");
            include_once('../model/eUsuario.php');
            $objFormGestionarUsuario = new formGestionarUsuarios;
            $objFormGestionarUsuario -> EncabezadoShow();
            $usuarios = new Usuario();
            $obtenerusuarios = $usuarios->obtenerusuariosfiltrados($filtroestado);
            return $obtenerusuarios;
        }


    }
?>