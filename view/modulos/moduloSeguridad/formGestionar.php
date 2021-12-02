<?php
    session_start();
    

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cdc4a056d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../styles/stylesLogin.css">
</head>

    <nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href="../../../index.php"><img src="../../img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                    <a href="formGestionar.php" class="nav"><i class="fa fa-cogs"></i>GESTIONAR</a>
                    <a href="../../../controller/getPerfil.php" class="nav"><i class="far fa-user"></i><?php echo $_SESSION['nombre'];?></a>
                    <a href="../../../controller/getCerrarSesion.php" class="nav"><i class="fas fa-sign-out-alt"></i>CERRAR SESIÓN</a>

                 </div>
            </div>
        </div>
    </nav>
<body>

    <style>
    
    .button{
        margin-left: 40%;
        top: 0;
        z-index: 100;
    }
    .button .btn {
        background: #252b37;
        color: white;
        margin-top: 65px;
        width: 30%;
        
     }
     .button .btn:hover {
        background: #80bcc6;
        color: black;
        transition: 0.5s;
     }
     
    </style>
        
       
                <form action="../../../controller/getGestionarUsuario.php" method="POST">
                <div class="button"><input type="submit" class="btn"  name="btnGestionarUsuario" id="btnGestionarUsuario" value="GESTIONAR USUARIO"></div>
                </form>
            
        

        
                <form action="../../../controller/getGestionarProductos.php" method="POST">
                <div class="button"><input type="submit" class="btn"  name="btnGestionarProductos" id="btnGestionarProductos" value="GESTIONAR SERVICIOS"></div>
                </form>


                <form action="../../../controller/getGestionarMascotas.php" method="POST">
                <div class="button"><input type="submit" class="btn"  name="btnGestionarMascotas" id="btnGestionarUsuario" value="GESTIONAR MASCOTAS"></div>
                </form>

                <form action="../../../controller/getGestionarCitas.php" method="POST">
                <div class="button"><input type="submit" class="btn"  name="btnGestionarCitas" id="btnGestionarUsuario" value="GESTIONAR CITAS"></div>
                </form>
        
</body>
<html>
        

        
        

        
    
