<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cdc4a056d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="syles/estilos.css">
</head>
<body>
    <nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href="index.php"><img src="view/img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                    <a href="getPerfil.php" class="nav"><i class="fa fa-cogs"></i>Gestionar</a>
                    <a href="getPerfil.php" class="nav"><i class="far fa-user"></i><?php echo $_SESSION['nombre'];?></a>
                    <a href="controller/getCerrarSesion.php" class="nav"><i class="fas fa-sign-out-alt"></i>CERRAR SESIÓN</a>

                 </div>
            </div>
        </div>
    </nav>
</body>
</html>
    