 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//Comentarios de una linea
		/*Comentarios de multiples lineas*/
		//Las variables comienzan con dolar  $
		$a = "Hola";
		$b = ' Mundo';

		echo $a . $b . " desde PHP<br>"; //Para concatenar en PHP se utiliza el punto.
		echo "<ul>";
		for ($i=0; $i <10 ; $i++) { 
			echo "<li>Opcion  $i</li>\n";
		}
		echo "</ul>";

		//Arreglos: 
		//Asigna automaticamente los indices.
		$arreglo[] = 1;
		$arreglo[] = 32342;
		$arreglo[] = 555;
		$arreglo[] = 666;

		//Inicializa todos los valores del arreglo y asigna autimaticamente los indices.
		//$arreglo2 = {44,54,56,7676};

		//Arreglo vacio para agregar valores en el futuro:
		$arreglo3 = array();

		//Arreglos asociativos:
		$arreglo4["nombre"] = "Pedro";
		$arreglo4["apellido"] = "Rodriguez";


		for ($i=0; $i < sizeof($arreglo); $i++) { 
			echo "Valor: " . $arreglo[$i] . "<br>";
		}

		echo "<hr>";
		foreach ($arreglo as $key => $value) {
			echo "Valor: " . $value . "<br>";
		}

	?>
	<script type="text/javascript">
		document.write("Hola Mundo  desde Javascript<br>");
	</script>
</body>
</html>