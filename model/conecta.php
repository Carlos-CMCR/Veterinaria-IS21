<?php
	class Conecta{
		protected function conectar(){
            $server="localhost";
            $user = "root";
            $pass = "";
            $db="veterinaria";

			$a =mysqli_connect($server,$user,$pass,$db);
			return($a);
		}

		protected function desconectar(){	
			mysqli_close($this->conectar());
		}
	}
?>