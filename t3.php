<?php 
//===============Ejercicio 3===================

	class variables{

		//*asignacion de atributos
		//En este archivo php realizar una asignacion de 2 variables, 1 array normal, 1 array multidimencional.

		//Asignar 3 valores en 1 array normal.
		//Asignar 3 arrays con 2 valores dentro del array multidimencional (Nombre, Edad, Color).
		public $arNormal = array(1,2,3);
		public $arMulti = array(
							array("Nombre" => "Cynthia",
								  "Edad" => 22,
								  "Color" => "azul"),
							array("Nombre" => "Jonathan",
								  "Edad"=> 21,
								  "Color" => "rojo"),
							array("Nombre" => "Anahi",
								  "Edad" => 22,
								  "Color" => "negro")
								);


		//*metodos
		//UTILIZAR SENTENCIA FOREACH PARA CADA ARRAY.
		public function arrayNormal(){

			foreach ($this->arNormal as $key => $value) {
				echo $value;		
			}
		}

		public function arrayMulti(){
			foreach ($this->arMulti as $multi) {
				echo "<br>";
				foreach ($multi as $etiqueta => $value) {
					echo $etiqueta.": ".$value."<br>";
				}
			}
		}
	}

	$obj = new variables();
	//Leer un array normal y mostrarlo en pantalla.
	echo "Array normal:","<br>";
	$obj->arrayNormal();
	echo "<br>","<br>";

	//Leer el array multidimencional, mostrarlo en pantalla y hacer un salto de linea en cada value del array.
	echo "Array multidimensional:";
	$obj->arrayMulti();
?>
