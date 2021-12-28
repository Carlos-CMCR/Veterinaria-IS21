<?php 

if (isset($_POST['btnEscoger'])){
    session_start();
    if (isset($_SESSION['user'])){
        header("Location: view/modulos/moduloAdministracion/formAgregarCita.php");
    }
    else{
        header("Location: ../view/modulos/moduloSeguridad/formAutenticarUsuario.php");
    }
}
?>