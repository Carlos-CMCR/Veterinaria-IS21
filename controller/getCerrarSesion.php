<?php

    if(isset($_POST['btnCerrarSesion'])){
        session_start();
        session_destroy();
        include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShowExito("Cerraste sesión correctamente","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Ir al inicio</a>");
    }else{

    	session_start();
        session_destroy();
        include_once("../shared/formMensajeSistema.php");
        $mensajeo = new formMensajeSistema;
        $mensajeo ->formMensajeSistema();
        $mensajeo ->formMensajeSistemaShowExito("Cerraste sesión correctamente","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Ir al inicio</a>");


    }
?>