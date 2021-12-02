
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styles/stylesLogin.css">
    <title>Registrar Mascota</title>
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
    <div class="card mt-5 " style="width: 23rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Registrar Mascota</h5></div>
        <div class="card-body">
        <form action="../../../controller/getRegistrarMascota.php" method="POST">
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Nombre de la mascota</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtNombreMascota"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Edad(neses)</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtEdad"> </div>
        </div>
        </div>
		<div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Color</label></div>
            <div class="col-8 ">
                <select name="selectColor">

                      <option value="nel" selected>Seleccionar</option>
                      <option value="blanco">Blanco</option>
                      <option value="marrón">Marrón</option>
                      <option value="negro">Negro</option>
                      <option value="gris">Gris</option>
                      <option value="mostaza">Mostaza</option>
                  
                </select>
            </div>
        </div>
        </div>
		<div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Raza</label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtRaza"> </div>
        </div>
        </div>
        <div class="mb-3">
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Tipo</label></div>
            <div class="col-8 ">
                <select name="selectTipo">
                  <option value="nel" selected>Seleccionar</option>
                  <option value="gato">Gato</option>
                  <option value="perro">Perro</option>
                  <option value="conejo">Conejo</option>
                  <option value="tortuga">Tortuga</option>
                  <option value="pajaro">Pajaro</option>
                  <option value="hamster">Hamster</option>
                  <option value="otro">Otro</option>
                  

                </select>
            </div>
        </div>
        </div>
        <div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"   name="registrarMascota" value="Registrar Mascota"></div>
        </div>
        </div>

        <div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="button" class="botons"   name="atras" value="Atrás" onclick="location='../../../controller/getPerfil.php'"></div>
        </div>
        </div>


        </form>
        
        
    </div>
    </div>
 
</body>
</html>

<!--

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../estilos.css">

</head>
<body class="login">
	<div class="card bg-light mb-3" style="max-width: 20rem">
<center>
	
			<form  class="form-control" action="../controller/getRegistrarCliente.php" method="POST">
			<h5 class="form-regitrar__title">Registrar Mascota</h5>
				<div class="form-registrar__title">
				<p>Nombre de la Mascota</p>
				<input class="form-registrar__inputs" type="text" name="txtNombreMascota">
				<p>Años</p>
				<input class="form-registrar__inputs" type="text" name="txtEdad">
				<p>Vacunas</p>
				<input class="form-registrar__inputs" type="text" name="txtVacunas">
				<p>Raza</p>
				<input class="form-registrar__inputs" type="text" name="txtRaza">
				<br><br>
				<input  type="submit"class="form-registrar__action" name="registrarMascota" value="Registrar Mascota">

			</form>
		</div>
	</div>
	
</center>
</body>
</html>