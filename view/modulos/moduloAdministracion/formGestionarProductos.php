<?php
include_once("../shared/formulario.php");
class formGestionarProductos extends formulario
{
    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Gestionar Servicios | Vetspa Villa Animal","../img/ico.png");
    }
    public function formGestionarProductosShow($retornado)
    { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <div class="d-flex justify-content-center">
            <div class="card my-4" style="width:80%;">
                <div class="card-header">
                    <h1 class="titulo">Gestionar Servicios</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Bienvenido al panel de Gestión de Servicios</p>
                    <form action="getGestionarProductos.php" method="POST">
                        <div class="d-flex justify-content">
                            <select name="segunestado" class="form-select form-select-sm w-25">
                                <option value="todos" selected>Todos</option>
                                <option value="0">Estado 0</option>
                                <option value="1">Estado 1</option>
                            </select>
                            <input type="submit" class="btn btn-info mx-3" name="btnFiltrarUsuarios" value="Filtrar">
                        </div>
                    </form>
                    <div class="div_btn" style="display: flex;">
                        <form action="getGestionarProductos.php" method="post">
                            <input type="submit" class="btn btn-primary" name="btnAgregar" value="Agregar nuevo servicio">
                        </form>
                    </div>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="width:10%;">id</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Precio Antes</th>
                                    <th scope="col">Descripción breve</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Descripción</th>
                                    <th  style="width:10%;">Accion</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($retornado as $product) { ?>
                                <tr class="tr">
                                    <td><?php echo $product['idproducto'] ?></td>
                                    <td>
                                        <img src="../view/img/<?php echo $product['foto_producto'] ?>">
                                        
                                            
                                        </td>
                                    <td><?php echo $product['nom_producto'] ?></td>
                                    <td><?php echo $product['prec_uni_producto'] ?> </td>
                                    <td><?php echo $product['prec_promo_producto'] ?> </td>
                                    <td><?php echo $product['tot_cant_producto'] ?></td>
                                    <td><?php echo $product['estado_producto'] ?></td>
                                    <td><?php echo $product['descrip_producto'] ?></td>
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
                            <form action='../controller/getPassword.php' method='POST'>
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