<?php

class formulario{

    protected function encabezadoShowIni($titulo,$ico){
        ?>
			<html>
                <head>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                    <title><?php echo $titulo;?></title>
                    <link rel="icon" href=<?php echo $ico; ?> />
                </head>			
                <body>
    
		<?php
    }

    protected function pieShow(){
			?>
                </body>
			</html>
			<?php
	}

    protected function BoletaDbHead(){
        
    }

}


?>