<?php
session_start();


if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
	if ($_SESSION['idrol']==1) {
		include "view/modulos/encabezadoc.php";
		include "view/modulos/inicio.php";      
    	include "view/modulos/pie.php";
		
	} elseif ($_SESSION['idrol']==4) {
		include "view/modulos/encabezadoa.php";
		include "view/modulos/inicio.php";      
    	include "view/modulos/pie.php";
		
	}
	
} else {
	include "view/modulos/encabezado.php";
    include "view/modulos/inicio.php";      
    include "view/modulos/pie.php";
}

    
?>
		
