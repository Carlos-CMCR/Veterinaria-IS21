<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/stylesLogin.css">
    <title>Recuperar contraseña</title>
</head>
<body class="background-acceso">

    

<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href=""><img src="../view/img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="../../../index.php" class="nav">HOME</a>
                 </div>
            </div>
        </div>
</nav>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 30rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Recuperar contraseña</h5></div>
        <div class="card-body">
        <form action="getCoincidirPassword.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Nueva contraseña</label></div>
            <div class="col-8 d-flex align-items-center"><input type="text" class="form-control" aria-describedby="text"  value="" name="new_password" id="new_password"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Repita Contraseña</label></div>
            <div class="col-8 d-flex align-items-center"><input type="text" class="form-control" aria-describedby="text"  value="" name="repet_password" id="repet_password"> </div>
        </div>
        </div>
        
        <div >
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnActualizar" id="btnActualizar" value="Actualizar"></div>
        </div></div>
        </form>
    
    </div>
        
    </div>
    </div>
    

</body>
</html>





<!--
<?php
    include_once("../shared/formulario.php");

    class formCambiarPassword extends formulario
    {

        public function EncabezadoShow(){
            $this -> encabezadoShowIni("Recordar Contraseña | King&Queen","../img/ico.png");
        }

        public function FormCambiarPassword(){
            ?> 
                <center>
                    <img src="../view/img/bannercama.jpg" alt="Banner" width="600" height="140">
                    <br/><br/>
                    <div  class="card bg-light mb-3" style="max-width: 20rem;">
                        <div class="card-header"><h5 class="card-title">Recuperar contraseña</h5></div>
                            <div class="card-body">

                                <form action="getCoincidirPassword.php" method="POST">
                                <p>Nueva Contraseña:</p>
                                <input type="text" value="" name="new_password" id="new_password"/><br/><br/>
                                <p>Repita Contraseña:</p>
                                <input type="text" value="" name="repet_password" id="repet_password"/><br/><br/>

                                <input type="submit" class="btn btn-secondary" name="btnActualizar" id="btnActualizar" value="Actualizar"/>
                                </form>

                        </div>
                    </div>
                </center> 
            <?php

            $this-> pieShow();

        }
    }
?>