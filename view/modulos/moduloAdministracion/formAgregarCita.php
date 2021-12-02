 <?php

class formAgregarCita{
	public function formAgregarCitaShow($returned){
		
		foreach ($returned as $servicio){
			echo $servicio['nom_producto'];
		}
	}
}
?> 

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/stylesRegistro.css">
  <title>Registrar Cita</title>
 </head>

<body class="background-acceso" >
	<nav class="menu navbar navbar-expand-lg navbar-light">
        <div class="container">      
                    <a href="../../../index.php"><img src="../../img/logo.png" alt=""></a>
                    
            <div class="collapse navbar-collapse">
                 <div class="navbar-nav ms-auto">
                 <a href="../../../index.php" class="nav"><i class="fas fa-home"> HOME</i></a>
                 </div>
            </div>
        </div>
    </nav>
	
	
    <div class="d-flex justify-content-center">               
    <div class="card mt-5 " style="width: 32rem;">
        <div class="card-header d-flex justify-content-center "><h5 class="card-title">Registrar Cita</h5></div>
        <div class="card-body">
        <div class="mb-3">
        <div class="row ">

	<form class="d-flex justify-content-center"  action="../../../controller/getRegistrarCliente.php" method="POST">


	<section class="container">
	    <div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Nombre Completo: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtNombre" id="nombres" placeholder="Ingrese su Nombre"> </div>
        </div>
        
        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Correo: </label></div>
            <div class="col-8 "><input type="email" class="form-control" aria-describedby="text"  name="txtCorreo" id="correo" placeholder="Ingrese su Correo" > </div>
        </div>

        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Celular: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtCelular" id="celular" placeholder="Ingrese su Celular" maxlength="9"> </div>
        </div>

        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Nombre de Mascota: </label></div>
            <div class="col-8 "><input type="text" class="form-control" aria-describedby="text"  name="txtNombre" id="nombres" placeholder="Ingrese su Nombre"> </div>
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

        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label  for="usuario" class="form-label">Servicio</label></div>
            <div class="col-8 ">
                <select name="selectTipo">
                  <option value="nel" selected>Seleccionar</option>
                  <option value="gato">Consulta Veterinaria</option>
                  <option value="perro">Farmacia Veterinaria</option>
                  <option value="conejo">Baño y peluquería</option>
                  <option value="tortuga">Vacunación </option>
                  <option value="tortuga">Desparasitaciones</option>
                  <option value="pajaro">Limpeza dental</option>
             
                </select>
            </div>
        </div>

        <div class="row ">
            <div class="col-4 d-flex align-items-center"><label   class="form-label">Describa brevemente la razón de su cita: </label></div>
            <div class="col-8 "><textarea type="text" name="descripcion" id="" cols="30" rows="10"></textarea ></div>
        </div>
        
        <div class="row ">
            <div class="col-6 d-flex align-items-center"><label   class="form-label">¿Es paciente?: </label></div>
        
        <p><input type="checkbox" name="check" value="1" > Si</p>
        <p><input type="checkbox" name="check" value="0" > No</p>   

        </div>	




		<br>		
    
    

	<div class="mb-2">
        <div class="row">
                <div class="col-12 d-flex justify-content-center"><input type="submit" class="botons"  name="btnRegistrar" id="btnIngresar" value="Registrar"></div>
        </div></div>

		
   
  </section>
  </form> 
	
</body>
</html>