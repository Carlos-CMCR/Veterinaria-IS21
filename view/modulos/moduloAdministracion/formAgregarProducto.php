<?php
include_once("../shared/formulario.php");

class formAgregarProducto extends formulario
{

    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Agregar Producto | Villa Animal","../img/ico.png");
    }

    public function formAgregarProductoShow()
    {
        /*session_start();*/
        
?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <center>
            <div class="card w-75 my-4">
                <div class="card-header">
                    <h1 class="titulo">Agregar servicio</h1>
                </div>
                <div class="card-body">
                    <form action="getGestionarProductos.php" method="POST">
                                                
                        <p>Nombre del servicio:</p>
                        <input type="text" name="txtnombreproducto" id="nombreproducto" value="">
                        <br>

                        <p>Costo:</p>
                        <input type="text" name="txtprecioproducto" id="precioproducto" value="">
                        <br>

                        <p>Costo Antes:</p>
                        <input type="text" name="txtpreciopromo" id="preciopromo" value="">
                        <br>

                        

                        <p>Estado:</p>                        
                        <select name="txtestado">
                          <option value="1" selected>Estado 1</option>
                          <option value="0">Estado 0</option>
                        </select>
                        <br>

                        <p>Descripción breve:</p>
                        <input type="text" name="txtstok" id="stok" value="">
                        <br>

                        <p>Descripción detallada:</p>                        
                        <textarea name="txtdescripcion" rows="5" cols="80"></textarea>
                        <br>

                        <p>Imagen:</p>
                        <input type="file" name="txtimagen" id="imagen" value="">
                        <br>


                        <br>

                        <input class="btn btn-primary" type="submit" name="btnAgregarBD" value="Agregar Servicio">

                        
                    </form>
                    <div class="div-header">                    	

                        <form action="getGestionarProductos.php" method="POST">                  
                            <input class="btn btn-dark" type="submit" name="btnGestionarProductos" value="Atras">
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