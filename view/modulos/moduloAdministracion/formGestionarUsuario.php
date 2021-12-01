<?php
include_once("../shared/formulario.php");
class formGestionarUsuarios extends formulario
{
    public function EncabezadoShow()
    {
        $this->encabezadoShowIni("Gestionar Usuario | King&Queen","../img/ico.png");
    }
    public function formGestionarUsuariosShow($listaUsuarios)
    { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php /*session_start(); */?>
        <div class="d-flex justify-content-center">
            <div class="card my-4" style="width:80%;">
                <div class="card-header">
                    <h1 class="titulo">Gestionar Usuarios</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Bienvenido al panel de Gestionar Usuarios</p>
                    <form action="getGestionarUsuario.php" method="POST">
                        <div class="d-flex justify-content">
                            <select name="segunestado" class="form-select form-select-sm w-25">
                                <option value="todos" selected>Todos</option>
                                <option value="activo">Activos</option>
                                <option value="inactivo">Inactivos</option>
                            </select>
                            <input type="submit" class="btn btn-info mx-3" name="btnFiltrarUsuarios" value="Filtrar">
                        </div>
                    </form>
                    <div class="div_btn" style="display: flex;">
                        <form action="getGestionarUsuario.php" method="post">
                            <input type="submit" class="btn btn-primary" name="btnRegistrarUsuario" value="Registrar">
                        </form>
                    </div>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="width:10%;">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha de Modificacion</th>
                                    <th scope="col">Fecha de Inicio</th>
                                    <th  style="width:10%;">Accion</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($listaUsuarios as $user) { ?>
                                <tr class="tr">
                                    <td><?php echo $user['nombres'] ?></td>
                                    <td><?php echo $user['apellidos'] ?></td>
                                    <td><?php echo $user['num_doc'] ?></td>
                                    <td><?php echo $user['rol'] ?> </td>
                                    <td><?php echo $user['estado_cuenta'] ?> </td>
                                    <td><?php echo $user['fecha_registro'] ?></td>
                                    <td><?php echo $user['fecha_modificacion'] ?></td>
                                    <td>
                                        <form action="getGestionarUsuario.php" method="post">
                                            <input type=hidden name=idusuario value='<?php echo $user['idusuario'] ?>'>
                                            <input class="btn btn-secondary" type=submit name=btnEditarUsuario value=Editar>
                                        </form>
                                        <?php if ($user['estado_cuenta'] == 'activo') { ?>
                                            <form action="getGestionarUsuario.php" method="POST">
                                                <input type="hidden" name="idusuario" value='<?php echo $user['idusuario'] ?>'>
                                                <input type=hidden name=estado value='activo'>
                                                <?php if ($_SESSION['num_doc'] == $user['num_doc']) { ?>
                                                    <input class="btn btn-warning" type="submit" name="btnCambiarEstado" value="Deshabilitar" disabled>

                                                <?php } else { ?>
                                                    <input class="btn btn-warning" type=submit name="btnCambiarEstado" value="Deshabilitar">
                                                <?php } ?>
                                            </form>
                                        <?php
                                        } else { ?>
                                            <form action="getGestionarUsuario.php" method="post">
                                                <input type=hidden name=idusuario value='<?php echo $user['idusuario'] ?>'>
                                                <input type=hidden name=estado value='inactivo'>
                                                <input class="btn btn-success w-500" type=submit name=btnCambiarEstado value="Habilitar">
                                            </form>
                                        <?php } ?>
                                        </form>
                                    </td>
                                <?php  } ?>
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