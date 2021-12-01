<?php   

    function validarcampos($login,$password){
        if(strlen($login)<8 or strlen($password)<8){
            return(0);
        }else{
            return(1);
        }
    }

    function validarPassword($login,$password){
    	echo "HOlaaaa";
                include_once("getPass.php");          
                $objUsuario = new pass;
                $objUsuario -> verificarPass($login,$password);

    		

    }

    if(isset($_POST['btnIngresar'])){
        $login = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        
        $resultado = validarcampos($login,$password);

        if($resultado == 0){
            include_once("../shared/formMensajeSistema.php");
            $mensajeo = new formMensajeSistema;
            $mensajeo ->formMensajeSistema();
            $mensajeo ->formMensajeSistemaShow("8 carácteres como mínimo","<a href='../view/modulos/moduloSeguridad/formAutenticarUsuario.php'>Atrás</a>");

        }else{
            
            include_once("controllerAutenticarUsuario.php");
            $valida = new controllerAutenticarUsuario;
            $valida -> ValidarUsuario($login,$password);
            

        }
    }else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Atrás</a>");
    }

?>