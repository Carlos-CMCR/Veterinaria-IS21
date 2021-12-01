<?php
    
    class controllerAutenticarUsuario{
        public function ValidarUsuario($log,$pass){

            include_once("../model/eUsuario.php");            
            $objUsuario = new Usuario;
            $respuesta = $objUsuario -> verificarUsuario($log,$pass);
            if ($respuesta==null) {
                include_once("../shared/formMensajeSistema.php");
                $mensaje = new formMensajeSistema;
                $mensaje ->formMensajeSistema();
                $mensaje ->formMensajeSistemaShow("El usuario o contraseña no existen. Intente de nuevo.","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Atrás</a>");

            } elseif($respuesta!=null) {  
                             
                header("location: ../index.php");
                
            }                      
        }


    }

?>