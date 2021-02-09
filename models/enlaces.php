<?php  
class Paginas{
	#funcion con parametro
	public function enlacesPaginasModel($enlaces){

		if(	$enlaces == "ingresar"||
			$enlaces == "usuarios"||
			$enlaces == "editar"  ||
			$enlaces == "salir"){

			$module = "views/modules/".$enlaces.".php";
		}
		else if($enlaces == "index"){

			$module = "views/modules/registro.php";
		}

		else{
			#lista blanca o lista negra
			#crearemos una lista blanca
			$module = "views/modules/registro.php";
		}

		return $module;
	}

}


?>