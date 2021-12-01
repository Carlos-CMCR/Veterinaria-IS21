<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../styles/stylesRegistro.css">
  <title>Registrar</title>
 </head>

<body class="background-acceso" >
	<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href="../../../index.php"><img src="../../img/logo.png" alt=""></a>
                    
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="../../../index.php" class="nav">HOMEE</a>
                 </div>
            </div>
        </div>
    </nav>
	
	
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 22rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Registrar</h5></div>
        <div class="card-body">
        <div class="mb-3">
        <div class="row ">

	<form class="d-flex justify-content-center"  action="../../../controller/getRegistrarCliente.php" method="POST">


	<section class="container">
	<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Nombre: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtNombre" id="nombres" placeholder="Ingrese su Nombre"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Apellidos: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtApellido" id="apellidos" placeholder="Ingrese sus Apellidos"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">DNI: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtDni" id="dni" placeholder="Ingrese su Dni" maxlength="8"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Celular: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtCelular" id="celular" placeholder="Ingrese su Celular" maxlength="9"> </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Correo: </label></div>
            <div class="col-8 "><input type="email" class="form-control" aria-describedby="text"  name="txtCorreo" id="correo" placeholder="Ingrese su Correo" > </div>
        </div>

		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Contraseña: </label></div>
            <div class="col-8 "><input type="password" class="form-control" aria-describedby="text"  name="txtPass1" id="pass1" placeholder="Ingrese su contraseña" > </div>
        </div>	
		<div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label"></label></div>
            <div class="col-8 "><input type="password" class="form-control" aria-describedby="text"  name="txtPass2" id="pass2" placeholder="Vuelva ingresar su contraseña" > </div>
        </div><br>		
    
    <p><input type="checkbox" name="check" value="1" > Acepto los términos y condiciones<br><br></p>

	<div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnRegistrar" id="btnIngresar" value="Registar"></div>
        </div></div>

		<div class="row ">
            <a href="formAutenticarUsuario.php" class="d-flex justify-content-center" id="links">¿Ya tengo Cuenta?</a></div>
        </div>

   
  </section>
  </form> 
	
</body>
</html>
