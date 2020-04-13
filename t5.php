<?php  
//===============Ejercicio 5===================

//En este archivo php Se jugara para capturar variables de un archivo html (login.php).

//Se pretende que se pueda recibir variables GET y POST mediante un formulario html.
//utilizar el archivo login.php para hacer el ejercicio.
//utilizar este archivo para la asignacion de variables POST y GET.
//Mostrar resultados en pantalla (POST).
//Mostrar los datos en la url y en pantalla (GET).
		
		//Maneja mas la informacion confidencial
		//Los datos de usuario NO se mostraron en la URL
		if($_POST){
			echo "Nombre: " .$_POST['name']."<br>";
			echo "Contraseña: " .$_POST['pass']."<br>";
		}

		//La informacion se muestra a todo esplendor
		//Los datos de usuario SI se mostraron en la URL
		if($_GET){
			echo "Nombre: " .$_GET['name']."<br>";
			echo "Contraseña: " .$_GET['pass']."<br>";
		}
?>