<?php
include_once("../shared/formulario.php");
class formGestionarProductos extends formulario
{
    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Gestionar Mascotas | Vetspa Villa Animal","../img/ico.png");
    }
    public function formGestionarProductosShow($retornado)
    { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/estilos.css">
        <div class="d-flex justify-content-center align-items-center" style="background-color: #252b37;">
            <div class="fondoGestion card my-4" style="width:80%;">
                <div class="card-header">
                    <h1 class="titulo">Gestionar Mascotas</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Bienvenido al panel de Gestión de Mascotas</p>
                    
                    <div class="div_btn" style="display: flex;">
                        <form action='../view/modulos/moduloSeguridad/formGestionar.php' method='POST'>
                                <input type='submit' class='btn btn-dark'  name='btnAtras' id='btnAtras' value='Atras'>
                            </form>
                    </div>

                        <table class="table" border=1>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="width:10%;">id User</th>
                                    <th scope="col">Nom Dueño</th>
                                    <th scope="col">Ape Dueño</th>
                                    <th scope="col">Nom Mascota</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Raza</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Fecha de registro</th>
                                    <th  style="width:10%;">Accion</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($retornado as $mascota) { ?>
                                <tr class="tr">
                                    <td><?php echo $mascota['idusuario'] ?></td>
                                    <td><?php echo $mascota['nombres'] ?></td>
                                    <td><?php echo $mascota['apellidos'] ?></td>
                                    <td><?php echo $mascota['nombre'] ?> </td>
                                    <td><?php echo $mascota['tipo'] ?> </td>
                                    <td><?php echo $mascota['raza'] ?></td>
                                    <td><?php echo $mascota['edad'] ?></td>
                                    <td><?php echo $mascota['color'] ?></td>
                                    <td><?php echo $mascota['fecha_registro'] ?></td>
                                    <td>
                                        <form action="getGestionarProductos.php" method="post">
                                            <input type=hidden name=idproducto value='<?php echo $product['idproducto'] ?>'>

                                            <input type=hidden name=fotoproducto value='<?php echo $product['foto_producto'] ?>'>

                                            <input type=hidden name=nombreproducto value='<?php echo $product['nom_producto'] ?>'>

                                            <input type=hidden name=precioproducto value='<?php echo $product['prec_uni_producto'] ?>'>

                                            <input type=hidden name=preciopromo value='<?php echo $product['prec_promo_producto'] ?>'>

                                            <input type=hidden name=stok value='<?php echo $product['tot_cant_producto'] ?>'>

                                            <input type=hidden name=estado value='<?php echo $product['estado_producto'] ?>'>

                                            <input type=hidden name=descripcion value='<?php echo $product['descrip_producto'] ?>'>

                                            <input class="btn btn-success" type=submit name=btnEditarProducto value=Editar>
                                        </form>

                                        <form action="getGestionarProductos.php" method="post">
                                            <input type=hidden name=idproducto value='<?php echo $product['idproducto'] ?>'>
                                            <input class="btn btn-danger" type=submit name="btnEliminarServicio" value=Eliminar>
                                        </form>

                                        
                                        
                                            
                                        <?php } ?>
                                        
                                    </td>
                                
                        </table>
                        <div class="card-footer">
                            <form action="../Controller/getUsuario.php" method="POST">
                                <input type="hidden" name="usuario" value="<?php echo $_SESSION['num_doc'] ?>">
                                <input type="hidden" name="password" value="<?php echo $_SESSION['pass_user'] ?>">
                                
                            </form>
                            <form action='../view/modulos/moduloSeguridad/formGestionar.php' method='POST'>
                                <input type='submit' class='btn btn-dark'  name='btnAtras' id='btnAtras' value='Atras'>
                            </form>
                            <form action='../controller/getCerrarSesion.php' method='POST'>
                                <input type='submit' class='btn btn-danger'  name='btnCerrarSesion' id='btnAtras' value='Cerrar sesión'>
                            </form>

                            <!--<form><input class="btn btn-dark" type="submit" name="btnIngresar" value="Atras"></form>-->
                            <?php $this->pieShow(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
    
    }
} 
?>