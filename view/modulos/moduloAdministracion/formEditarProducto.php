<?php
include_once("../shared/formulario.php");

class formEditarProducto extends formulario
{

    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Editar Producto | Villa Animal","../img/ico.png");
    }

    public function formEditarProductoShow($id,$fotoproducto,$nombreproducto,$precioproducto,$preciopromo,$stok,$estado,$descripcion)
    {
        /*session_start();*/
        
?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <center>
            <div class="card w-75 my-4">
                <div class="card-header">
                    <h1 class="titulo">Editar Producto</h1>
                </div>
                <div class="card-body">
                    <form action="getGestionarProductos.php" method="POST">
                        <p>id Producto:</p>
                        
                        <input type="text" name="txtidproducto" id="nombres" value="<?php echo $id;?>" disabled="disabled">
                        <br>
                        <p>Imagen:</p>
                        <input type="text" name="txtimagen" id="imagen" value="<?php echo $fotoproducto; ?>">
                        <br>

                        <p>Nombre:</p>
                        <input type="text" name="txtnombreproducto" id="nombreproducto" value="<?php echo $nombreproducto; ?>">
                        <br>

                        <p>Precio real:</p>
                        <input type="text" name="txtprecioproducto" id="precioproducto" value="<?php echo $precioproducto; ?>">
                        <br>

                        <p>Precio de promoción:</p>
                        <input type="text" name="txtpreciopromo" id="preciopromo" value="<?php echo $preciopromo; ?>">
                        <br>

                        <p>Stok:</p>
                        <input type="text" name="txtstok" id="stok" value="<?php echo $stok; ?>">
                        <br>

                        <p>Estado:</p>
                        <input type="text" name="txtestado" id="estado" value="<?php echo $estado; ?>">
                        <br>

                        <p>Descripción:</p>                        
                        <textarea name="txtdescripcion" rows="5" cols="80"><?php echo $descripcion; ?></textarea>
                        <br><br>

                        <input class="btn btn-primary" type="submit" name="btnActualizar" value="Actualizar">

                        
                    </form>
                    <div class="div-header">                    	

                        <form action="getGestionarUsuario.php" method="POST">                           
                            <input class="btn btn-dark" type="submit" name="btnGestionarUsuario" value="Atras">
                        </form>
                        
                    </div>
                </div>
            </div>
        </center>
<?php
        $this->pieShow();
    }
}
?>