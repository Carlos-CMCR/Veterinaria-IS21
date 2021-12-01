<?php
include_once("../shared/formulario.php");

class FormAgregarUsuario extends formulario
{

    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Agregar Usuario | King&Queen","../img/ico.png");
    }

    public function FormAgregarUsuarioShow($roles, $mensaje)
    {
        /*session_start();*/
?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <center>
            <div class="card w-75 my-4">
                <div class="card-header">
                    <h1 class="titulo">Agregar Usuario</h1>
                </div>
                <div class="card-body">
                    <form action="getGestionarUsuario.php" method="POST">
                        <p>Nombres:</p>
                        <input type="text" name="nombres" id="nombres"><br />
                        <p>Apellidos:</p>
                        <input type="text" name="apellidos" id="apellidos"><br />
                        <p>ROL:</p>
                        <div class="d-flex justify-content-center">
                            <select  class="form-select form-select w-50" name="rol">
                                <?php foreach ($roles as $rol) { ?>
                                    <option value="<?php echo $rol['idrol'] ?>"><?php echo $rol['rol'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <?php if (isset($mensaje)) { ?>
                            <center>
                                <h2><?php echo $mensaje; ?></h2>
                            </center>
                        <?php
                        } ?>
                        <p>DNI:</p>
                        <input type="text" name="num_doc" id="num_doc"><br />
                        <p>Respuesta:</p>
                        <input type="text" name="respuesta" id="respuesta" /><br />
                        <br>
                        <input type="submit" class="btn btn-info " name="btnAgregarUsuario" id="btnActualizar" value="Aceptar" />
                    </form>
                    <div class="div-header">
                        <form action="getGestionarUsuario.php" method="POST">
                            <input type="hidden" name="usuario" value="<?php echo $_SESSION['num_doc'] ?>">
                            <input type="hidden" name="password" value="<?php echo $_SESSION['pass_user'] ?>">
                            <input class="btn btn-red" type="submit" name="btnGestionarUsuario" value="Atras">
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