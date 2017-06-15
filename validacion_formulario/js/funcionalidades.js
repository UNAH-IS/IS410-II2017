function guardarRegistro(){
	var errores=false;
	var listaErrores="";
	if(document.getElementById("txt-nombre").value){
		document.getElementById("txt-nombre").style.borderColor = "#ccc";
	}
	else{
		document.getElementById("txt-nombre").style.borderColor = "#ff0000";
		errores = true;
		listaErrores+="El campo nombre esta vacio<br>";
	}


	if(document.getElementById("txt-apellido").value){
		document.getElementById("txt-apellido").style.borderColor = "#ccc";
	}
	else{
		document.getElementById("txt-apellido").style.borderColor = "#ff0000";
		errores = true;
		listaErrores+="El campo apellido esta vacio<br>";
	}

	if (errores){
		document.getElementById("resultado-validacion").innerHTML = listaErrores;
	}else{
		document.getElementById("tbl-registros").innerHTML += 
			"<tr><td>"+document.getElementById("txt-nombre").value+"</td><td>"+
			document.getElementById("txt-apellido").value+"</td></tr>";

		document.getElementById("resultado-validacion").innerHTML = "Registro almacenado con exito";
	}
}