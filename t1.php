<?php  
//===============Ejercicio 1===================
//En este archivo php realizar una asignacion de 5 variables, 2 string, 2 int y 1 bool.

	class Variables{

		//*DECLARACION DE VARIABLES (ESTATICAS POR EL MOMENTO)

		public $str1 = "Hola", $str2 = "amor"; //variables string
		public $int1 = 12 , $int2 = 5; //variables int
		public $bool = True; //variable booleana

		//*TOMA VALOR
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
		public function tomabool(){
			return $this->bool;
		}

		//*METODOS PARA LAS DIVERSAS PETICIONES
		public function op($int1, $int2, $opcion){

			switch ($opcion) {
			case 'suma':
				return $int1 + $int2;
				break;

			case 'resta':
				return $int1 - $int2;
				break;

			case 'division':
				return $int1 / $int2;
				break;
			
			case 'multiplicacion':
				return $int1 * $int2;
				break;
			}
		}

		public function condicional(){
			if ($this->bool == True) {
				if ($this->int1 > 10 ) {

					return $this->str1;
					
				} //*para que hacerlo mas largo
			}
			else {
				//*Pues nada
			}
		}
	
	}
	//*MOSTRAR RESULTADOS
	//*INSTANCIA DE OBJETO
	$obj = new variables();

		//Mostrar en pantalla las 5 variables. 
		//*(ya lo tenia concatenado y con saltos :v pero lo hare a tu manera)
	echo "Tarea 1: ";
	echo $obj->str1;
	echo $obj->str2;
	echo $obj->int1;
	echo $obj->int2;
	echo $obj->bool;
	echo "<br>";

		//Concatenar las variables de manera seguida.
	echo "Tarea 2: ", $obj->str1, $obj->str2, $obj->int1, $obj->int2, $obj->bool, "<br>";

		//Concatenar las variables y separar por un "--".
	echo "Tarea 3: ", $obj->str1, "--", $obj->str2, "--",$obj->int1, "--",$obj->int2, "--",$obj->bool,"<br>";

		//Poner un salto de linea al finalizar cada fila donde exista una variable.
		//*lo hare sin concatenar para que se vea mas estetico
	echo "<br>", "Tarea 4:", "<br>";
	echo $obj->str1, "<br>";
	echo $obj->str2, "<br>";
	echo $obj->int1, "<br>";
	echo $obj->int2, "<br>";
	echo $obj->bool, "<br>";

		//Concatenar las variables con una descripcion : "Variable abc tiene el valor ="
		//*Utilizo el var_dump para decirte el tipo de variable que es
	echo "<br>", "Tarea 5:";
	echo "<br>","Nombre: str1, Valor: ", var_dump ($obj->str1);
	echo "<br>","Nombre: str2, Valor: ", var_dump ($obj->str2);
	echo "<br>","Nombre: int1, Valor: ", var_dump ($obj->int1);
	echo "<br>","Nombre: int2, Valor: ", var_dump ($obj->int2);
	echo "<br>","Nombre: bool, Valor: ", var_dump ($obj->bool);

	//Sumar las variables int y mostrar su resultado.
	echo "<br>", "<br>", "Tarea 6 (suma): ";
	echo $obj->op($obj->tomaInt1(),$obj->tomaInt2(),"suma");

	//Restar las variables int y mostrar su resultado.
	echo "<br>", "Tarea 7 (resta): ";
	echo $obj->op($obj->tomaInt1(),$obj->tomaInt2(),"resta");

	//Dividir y Multiplicar las variables int y mostrar su resultado.
	echo "<br>", "Tarea 8 (division): ";
	echo $obj->op($obj->tomaInt1(),$obj->tomaInt2(),"division");

	echo "<br>", "Tarea 9 (multiplicacion): ";
	echo $obj->op($obj->tomaInt1(),$obj->tomaInt2(),"multiplicacion");

	//utilizar la variable bool para la realizacion de una sentencia IF ,con la ayuda de las variables int y mostrar el contentindo de las 2 variables string.
	echo "<br>";
	echo "<br>", "Tarea 10: ";
	echo $obj->condicional();
?>













