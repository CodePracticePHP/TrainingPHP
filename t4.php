<?php  
//===============Ejercicio 4===================

//En este archivo php Se jugara para mostrar variables en un archivo html sencillo.
	class variables{

		//Asignar 3 variables (Nombre, Edad, Color).
		public $nombre = "Cynthia";
		public $edad = 22;
		public $color = "Azul";

		public function retNombre(){
			return $this->nombre;
		}

		public function retEdad(){
			return $this->edad;
		}

		public function retColor(){
			return $this->color;
		}

	}

	$obj = new variables();
	//Imprimir dichas variables en pantalla.
	echo "Imprime variables en PHP:","<br>";
	echo $obj->retNombre(), "<br>";
	echo $obj->retEdad(), "<br>";
	echo $obj->retColor(), "<br>";

//Integrar las variables con un html.
//Mostrar las variables en los input donde corresponden.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Integracion de variables en html</title>
</head>
<body>

	<h1>Integración de variables en html</h1>
	<form name="f1" id="f1">

		<b>Nombre:</b>
		<input type="text" name="Nombre" value="<?php echo $obj->retNombre() ?>"></input></br>
		<b>Edad:</b>
		<input type="text" name="Edad" value="<?php echo $obj->retEdad() ?>"></input></br>
		<b>Color:</b>
		<input type="text" name="Color" value="<?php echo $obj->retColor() ?>"></input></br>

	 </form>
</body>
</html>