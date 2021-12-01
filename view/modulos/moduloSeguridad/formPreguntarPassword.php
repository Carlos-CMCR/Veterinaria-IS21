
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/stylesLogin.css">
    <title>Cambiar Contraseña</title>
</head>
<body class="background-acceso">

    

<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href=""><img src="../view/img/logo.png" ></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="../index.php" class="nav">HOME</a>
                 </div>
            </div>
        </div>
    </nav>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 25rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Cambiar contraseña</h5></div>
        <div class="card-body">
        <form action="getPassword.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Contraseña</label></div>
            <div class="col-8 "><input type="password" class="form-control" aria-describedby="text"  name="passwordUSER" id="passwordUSER"> </div>
        </div>
        </div>
        

        <div class="mb-2">
        <div class="row">
                <div class="col-6 d-flex justify-content-center"><input type="submit" class="botons"  name="btnAtras" id="btnAtras" value="Atras"></div>
                <div class="col-6 d-flex justify-content-center"><input type="submit" class="botons"  name="btnSiguiente" id="btnSiguiente" value="Siguiente"></div>
        </div></div>
        </form>
    </div>
    </div>

</body>
</html>











<!--
<?php
include_once("../shared/formulario.php");


class FormPreguntarPassword extends formulario{

    public function encabezadoShow(){
        $this->encabezadoShowIni("Cambiar Clave | King&Queen","../img/ico.png");
    }

    public function FormPreguntarPasswordShow(){
        ?>
                    <center>
                        <img src="../../img/bannercama.jpg" alt="Banner" width="640" height="180">

                        <br/><br/>  
                        <div class="card bg-light mb-3" style="max-width: 20rem;">
                            <div class="card-header"><h5 class="card-title">Cambiar Clave</h5></div>
                                <div class="card-body">

                                <form action="getPassword.php" method="POST">
                                    <p>Contraseña:</p>
                                    <input type="password" name="passwordUSER" id="passwordUSER"/><br><br/>
                                    <input type="submit" class="btn btn-secondary"  name="btnSiguiente" id="btnSiguiente" value="Siguiente"/>
                                    <input type="submit" class="btn btn-secondary"  name="btnAtras" id="btnAtras" value="Atras"/><br/>
                                </form> 

                                </div>
                        </div>
                    </center>
        ....
            <center>
                <img src="../img/bannercama.jpg" alt="Banner Home" width="640" height="180">
                <form action="../Controller/getPassword.php" method="POST">
                    <p>Contraseña:</p><br/>
                    <input type="text" name="passwordUSER" id="passwordUSER"/><br><br/>
                    <input type="submit" name="btnSiguiente" id="btnSiguiente" value="Siguiente"/>
                    <input type="submit" name="btnAtras" id="btnAtras" value="Atras"/><br/>
                </form>    
            </center>-->
            

        <?php
        $this-> pieShow();
        
    }

}
?>