<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/stylesLogin.css">
    <title>Recuperar contraseña</title>
</head>
<body class="background-acceso">

    

<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href=""><img src="../../img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="../../../index.php" class="nav">HOME</a>
                 </div>
            </div>
        </div>
</nav>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 18rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Recuperar contraseña</h5></div>
        <div class="card-body">
        <form action="../../../controller/getRespuesta.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center"><label  for="usuario" class="form-label">¿Cuál es la palabra clave?</label></div>
        </div>
        </div>
        <div class="row ">
        <div class="col-12 d-flex align-items-center"><input type="text" class="form-control" aria-describedby="text"  value="" name="respuesta" id="respuesta"> </div>
        </div>
        </div>
        <div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnEnviar" id="btnEnviar" value="Enviar"></div>
        </div></div>
        </form>
    
    </div>
        
    </div>
    

</body>
</html>

