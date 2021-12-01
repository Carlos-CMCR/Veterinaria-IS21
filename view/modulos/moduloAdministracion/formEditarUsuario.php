<?php
include_once("../shared/formulario.php");

class FormEditarUsuario extends formulario
{

    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Editar Usuario | King&Queen","../img/ico.png");
    }

    public function FormEditarUsuarioShow($row, $roles)
    {
        /*session_start();*/
        
?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <center>
            <div class="card w-75 my-4">
                <div class="card-header">
                    <h1 class="titulo">Editar Usuario</h1>
                </div>
                <div class="card-body">
                    <form action="getGestionarUsuario.php" method="POST">
                        <p>Nombres:</p>
                        <input type="hidden" name="idusuario" value="<?php echo $row['idusuario'] ?>">
                        <input type="text" name="nombres" id="nombres" value="<?php echo $row['nombres']; ?>">
                        <br />
                        <p>Apellidos:</p>
                        <input type="text" name="apellidos" id="apellidos" value="<?php echo $row['apellidos']; ?>">
                        <br />
                        <p>ROL:</p>
                        <div class="d-flex justify-content-center">
                            <?php if($row['rol']=='Administrador'){?>
                                
                                <select class="selectrol" class="form-select form-select" name="rol" disabled>
                            <?php
                            }else{?>
                                <select class="selectrol" class="form-select form-select" name="rol">
                            <?php
                            }?>
                                <option value="<?php echo $row['rol'] ?>" selected><?php echo $row['rol'] ?></option>
                                <?php foreach ($roles as $rol) { ?>
                                    <option value="<?php echo $rol['rol'] ?>"><?php echo $rol['rol'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <input type="submit" class="btn btn-info mx-3" name="btnActualizarUsuario" id="btnActualizar" value="Actualizar" />
                        </div>
                    </form>
                    <div class="div-header">
                        <form action="getGestionarUsuario.php" method="POST">
                            <input type="hidden" name="usuario" value="<?php echo $_SESSION['num_doc'] ?>">
                            <input type="hidden" name="password" value="<?php echo $_SESSION['pass_user'] ?>">
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