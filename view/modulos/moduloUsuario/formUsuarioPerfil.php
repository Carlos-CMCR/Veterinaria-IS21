<?php
    class formUsuarioPerfil{
        public function formUsuarioPerfilShow($retornado){

            
            
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cdc4a056d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/stylesLogin.css">
</head>
<body>
    <nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href=""><img src="../../img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                    <a href="getCerrarSesion.php" class="nav"><i class="fas fa-sign-out-alt"></i>CERRAR SESIÓN</a>
                 </div>
            </div>
        </div>
    </nav>

    <?php
    foreach ($retornado as $atributo ) {
            
            
    }
    ?>
    

    <form action="getEditarPerfil.php" method="POST">
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 65rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Perfil</h5></div>
        <div class="card-body">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="nombres" class="form-label">Nombres</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text" disabled="disabled"  name="nombres" id="nombres" value="<?php echo $atributo['nombres']; ?>"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="apellidos" class="form-label">Apellidos</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text" disabled="disabled"  name="apellidos" id="apellidos" value="<?php echo $atributo['apellidos']; ?>"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="Documento" class="form-label">Documento</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text" disabled="disabled" name="Documento" id="Documento" value="<?php echo $atributo['num_doc']; ?>"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="Celular" class="form-label">Celular</label></div>
            <div class="col-8 "><input type="number" class="form-control" aria-describedby="text" disabled="disabled"  name="Celular" id="Celular" value="<?php echo $atributo['celular']; ?>"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row">
                <div class="col-4 d-flex align-items-center"><label for="correo" class="form-label">Correo</label> </div>
                <div class="col-8 "><input type="email"  class="form-control" aria-describedby="passwordHelpBlock" name="correo" disabled="disabled" id="correo" value="<?php echo $atributo['correo']; ?>"> </div>
        </div>
        </div>
        <div class="mb-2">
        <div class="row">
                <div class="col-4 d-flex justify-content-center"><input type="submit" class="botons"  name="btnIngresar" id="btnIngresar" value="Volver" onclick="location='../view/modulos/inicio.php'"></div>
                <div class="col-4 d-flex justify-content-center"><input type="button" class="botons"  name="btnIngresar" id="btnIngresar" value="Registrar Mascota" onclick="location='../view/modulos/moduloSeguridad/formRegistrarMascota.php'"></div>
                <div class="col-4 d-flex justify-content-center"><input type="submit" class="botons"  name="btnEditar" id="btnIngresar" value="Editar"></div>
            
        </div></div>
        
        
    </div>
    </div></div>
    </form>





</body>
</html>
    

      
        
     
