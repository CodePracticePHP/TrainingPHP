<?php 	 
//===============Ejercicio 2===================
//En este archivo php realizar una asignacion de 4 variables, 2 string, 2 int.

	class variables{

		//*asignaciones de atributos
		public $str1 = "Cynthia";
		public $str2 = "Anahi";
		public $int1 = 9;
		public $int2 = 11;

		public function tomaStr1(){
			return $this->str1;
		}
		public function tomaStr2(){
			return $this->str2;
		}

		public function tomaInt1(){
			return $this->int1;
		}

		public function tomaInt2(){
			return $this->int2;
		}

		//*metodo
		public function ciclo($int1,$int2){

			for ($i=0; $i < 10 ; $i++) { 
				$resultado = $int1 + $int2;
				echo $resultado, "<br>";
			}
		}
	}

	//Realizar y Mostrar la impresion de 10 numeros, utilizando la sentencia FOR, donde se utilice 1 variable int y se sume 10 veces con la otra variable int.
	$obj = new variables();
	echo "Sentencia FOR: ", "<br>";
	$obj->ciclo($obj->tomaInt1(),$obj->tomaInt2());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tareas con html</title>
</head>
<body>
	<p>Mostrar las variables con un BOLT de html:</p>
	<b><?php echo $obj->tomaStr1()," ", $obj->tomaStr2(), " ",
				   $obj->tomaInt1()," ", $obj->tomaInt2()?></b>

	<p>Mostrar las variables con un color distinto:</p>
	<p style="color:blue"><?php echo $obj->tomaStr1(), "<br>" ?></p>
	<p style="color:green"><?php echo $obj->tomaStr1(), "<br>" ?></p>
	<p style="color:red"><?php echo $obj->tomaStr1(), "<br>" ?></p>
	<p style="color:purple"><?php echo $obj->tomaStr1(), "<br>" ?></p>

	<p>Mostrar las variables con un H1, H2, H3 y H4 de HTML:</p>
	<h1><?php echo $obj->tomaStr1()," ", $obj->tomaStr2(), " ",
				   $obj->tomaInt1()," ", $obj->tomaInt2()?></h1>
	<h2><?php echo $obj->tomaStr1()," ", $obj->tomaStr2(), " ",
				   $obj->tomaInt1()," ", $obj->tomaInt2()?></h2>
	<h3><?php echo $obj->tomaStr1()," ", $obj->tomaStr2(), " ",
				   $obj->tomaInt1()," ", $obj->tomaInt2()?></h3>
	<h4><?php echo $obj->tomaStr1()," ", $obj->tomaStr2(), " ",
				   $obj->tomaInt1()," ", $obj->tomaInt2()?></h4>
</body>
</html>