<?php

    include_once("formulario.php");

	class formMensajeSistema extends formulario{
		public function formMensajeSistema()		{
			$this -> encabezadoShowIni("Vetspa Villa Animal","../img/ico.png");
		}
		public function formMensajeSistemaShow($mensaje,$enlace){
			?>
            </br></br>
			<table width="313" border="0" align="center">
                <tr>
                    <td width="129" rowspan="3" align="center" valign="middle"><img src="../view/img/advertencia.png" width="100" height="100"></td>
                    <td align="center">Mensaje del Sistema</td>
                </tr>
                <tr>
                    <td height="52" align="center"><hr><?php echo $mensaje; ?><hr></td>
                </tr>
                <tr>
                    <td align="center"><?php echo $enlace; ?></td>
                </tr>
            </table>

			<?php
            $this->pieShow();
		}

        public function formMensajeSistemaShow2($mensaje,$enlace){
            ?>
            </br></br>
            <table width="313" border="0" align="center">
                <tr>
                    <td width="129" rowspan="3" align="center" valign="middle"><img src="../view/img/advertencia.png" width="100" height="100"></td>
                    <td align="center">Mensaje del Sistema</td>
                </tr>
                <tr>
                    <td height="52" align="center"><hr><?php echo $mensaje; ?><hr></td>
                </tr>
                <tr>
                    <td align="center"><?php echo $enlace; ?></td>
                </tr>
            </table>

            <?php
            $this->pieShow();
        }

        public function formMensajeSistemaShowExito($mensaje,$enlace){
        ?>
                </br></br>
                <table width="313" border="0" align="center">
                    <tr>
                    <td width="129" rowspan="3" align="center" valign="middle"><img src="../view/img/exito.png" width="100" height="100"></td>
                    <td align="center">Mensaje del Sistema</td>
                    </tr>
                    <tr>
                    <td height="52" align="center"><hr><?php echo $mensaje; ?><hr></td>
                    </tr>
                    <tr>
                    <td align="center"><?php echo $enlace; ?></td>
                    </tr>
                </table>
            <?php
            $this->pieShow();
        }
    }


?>

