<?php
	$archivo = fopen("archivo.csv","a+"); //r: read, w: write, a+: Append
	fwrite($archivo,  $_POST["txt-email"] . "," . $_POST["txt-password"]."\n");
	fclose($archivo);
	echo "Registro almacenado";
?>