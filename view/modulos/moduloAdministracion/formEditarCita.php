<?php
include_once("../shared/formulario.php");

class formEditarCita extends formulario
{

    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Editar Cita | Villa Animal","../img/ico.png");
    }

    public function formEditarCitaShow($id,$nombre,$correo,$celular,$descripcion,$fecha_r,$fecha_c)
    {
        /*session_start();*/
        
?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../styles/stylesLogin.css">
        <center>
            <div class="card w-75 my-4">
                <div class="card-header">
                    <h1 class="titulo">Editar Cita</h1>
                </div>
                <div class="card-body">
                    <form action="getGestionarCitas.php" method="POST">
                        <p>id Cita:</p>
                        
                        <input type="text" name="txtidd"  value="<?php echo $id;?>" disabled="disabled">
                        <input type="hidden" name="txtid"  value="<?php echo $id;?>">
                        <br>
                        <p>Nombre:</p>
                        <input type="text" name="txtnombre" value="<?php echo $nombre; ?>">
                        <input type="hidden" name="txtnombre_r" value="<?php echo $nombre; ?>">
                        <br>

                        <p>Correo:</p>
                        <input type="text" name="txtcorreo"  value="<?php echo $correo; ?>">
                        <input type="hidden" name="txtcorreo_r"  value="<?php echo $correo; ?>">
                        <br>
                        <p>Celular:</p>
                        <input type="tel" name="txtcelular" pattern="[0-9]{9}" value="<?php echo $celular; ?>">
                        <input type="hidden" name="txtcelular_r" pattern="[0-9]{9}" value="<?php echo $celular; ?>">
                        <br>

                        <p>Descripción:</p>                        
                        <textarea name="txtdescripcion" rows="5" cols="80"><?php echo $descripcion; ?></textarea>
                        <input type="hidden" name="txtdescripcion_r"  value="<?php echo $descripcion; ?>">
                        <br><br>


                        <p>Fecha de registro:</p>
                        <input type="text" name="txtfecha_r" value="<?php echo $fecha_r; ?>" disabled="disabled">
                        <input type="hidden" name="txtfecha_r" value="<?php echo $fecha_r; ?>">
                        <br>

                        <p>Fecha de la cita:</p>
                        <input type="date" name="txtfecha_c"  value="<?php echo $fecha_c; ?>">
                        <input type="hidden" name="txtfecha_c_r"  value="<?php echo $fecha_c; ?>">
                        <br>

                        <input class="btn btn-primary" type="submit" name="btnActualizar" value="Actualizar">

                        
                    </form>
                    <div class="div-header">                    	

                        <form action="getGestionarCitas.php" method="POST">                           
                            <input class="btn btn-dark" type="submit" name="btnGestionarCitas" value="Atrás">
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