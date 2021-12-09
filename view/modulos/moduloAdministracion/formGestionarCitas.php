<?php
include_once("../shared/formulario.php");
class formGestionarCitas extends formulario
{
    public  function EncabezadoShow()
    {
        $this->encabezadoShowIni("Gestionar Citas | Vetspa Villa Animal","../img/ico.png");
    }
    public function formGestionarCitasShow($citas)
    { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <div class="d-flex justify-content-center align-items-center"  style="background-color: #252b37;">
            <div class="card my-4" style="width:80%;">
                <div class="card-header">
                    <h1 class="titulo">Gestionar Citas</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Bienvenido al panel de Gestión de Citas</p>
                 

                        <table class="table" border=1>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="width:10%;">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha de Registro</th>
                                    <th scope="col">Fecha de la Cita</th>
                                    <th  style="width:10%;">Accion</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($citas as $cita) { ?>
                                <tr class="tr">
                                    
                                    <td><?php echo $cita['id_cita'] ?></td>
                                    <td><?php echo $cita['nombre_responsable'] ?> </td>
                                    <td><?php echo $cita['correo_responsable'] ?> </td>
                                    <td><?php echo $cita['celular_responsable'] ?></td>
                                    <td><?php echo $cita['descripcion_cita'] ?></td>
                                    <td><?php echo $cita['fecha_registro'] ?></td>
                                    <td><?php echo $cita['fecha_cita'] ?></td>
                                    <td>
                                        <form action="getGestionarCitas.php" method="post">
                                            <input type=hidden name="id_cita" value='<?php echo $cita['id_cita'] ?>'>
                                            <input type=hidden name="nombre_responsable" value='<?php echo $cita['nombre_responsable'] ?>'>
                                            <input type=hidden name="celular_responsable" value='<?php echo $cita['celular_responsable'] ?>'>
                                            <input type=hidden name="correo_responsable" value='<?php echo $cita['correo_responsable'] ?>'>
                                            <input type=hidden name="descripcion_cita" value='<?php echo $cita['descripcion_cita'] ?>'>
                                            <input type=hidden name="fecha_registro" value='<?php echo $cita['fecha_registro']?>'>
                                            <input type=hidden name="fecha_cita" value='<?php echo $cita['fecha_cita'] ?>'>

                                            <input class="btn btn-success" type=submit name=btnEditarCita value=Editar>
                                        </form>

                                        <form action="getGestionarCitas.php" method="post">
                                            <input type=hidden name=idcita value='<?php echo $cita['id_cita'] ?>'>
                                            <input class="btn btn-danger" type=submit name="btnEliminarCita" value=Eliminar>
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