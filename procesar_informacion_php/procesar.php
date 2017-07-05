<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Este es la pagina(rutina PHP) que recibe la informacion
	<?php
		echo "<br>Este es el correo electronico enviado: ". $_POST["txt-email"]; 
		echo "<br>Este es la contraseña enviada: ". $_POST["txt-password"]; 
		echo "<br>Otro parametro: ". $_GET["otro-parametro"]; 
		/*$_GET
		$_POST
		$_REQUEST
		$_SESSION*/

		$archivo = fopen("archivo.txt","a+"); //r: read, w: write, a+: Append
		fwrite($archivo,  $_POST["txt-email"] . "," . $_POST["txt-password"]."\n");
		fclose($archivo);


	?>
</body>
</html>