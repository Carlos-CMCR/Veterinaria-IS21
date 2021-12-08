<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/stylesLogin.css">

    <title>Cambiar Clave</title>

</head>
<body class="background-acceso">

    

<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href="../../../index.php"><img src="../../img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="../../../index.php" class="nav">HOME</a>
                 </div>
            </div>
        </div>
</nav>
    
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 30rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Cambiar Clave</h5></div>
        <div class="card-body">
        <form action="../../../controller/getChangePassword.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Contraseña Actual</label></div>
            <div class="col-8 d-flex align-items-center"><input type="password" class="form-control" aria-describedby="text"  value="" name="password" id="new_password"> </div>
        </div><br>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Nueva contraseña</label></div>
            <div class="col-8 d-flex align-items-center"><input type="password" class="form-control" aria-describedby="text"  value="" name="new_password1" id="new_password"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Repita Contraseña</label></div>
            <div class="col-8 d-flex align-items-center"><input type="password" class="form-control" aria-describedby="text"  value="" name="new_password2" id="new_password2"> </div>
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