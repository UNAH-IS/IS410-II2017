//Comentario de una linea
/*
Comentario de multiples lineas

*/
var a;
b = "Juan";
/*
	int
	boolean
	double
	object
	null
	undefinied
	--typeof()
*/
for (var i = 1; i <= 10; i++) {
	document.write("<b>Hola Mundo</b><br>");
}
alert("Hola Mundo en un cuadro de dialogo");
console.log("Hola mundo desde la consola de javascript");	

function enviarDatos(a,b){
	alert("Se enviara los datos : " + a +" y " + b); 
}
function mouseOver(){
	console.log("Evento mouse Over");
}

function mouseEnter(){
	console.log("Evento mouse Enter");
	document.getElementById("div-contenido").style.backgroundColor = "#000";
	document.getElementById("div-contenido").style.color = "#fff";
}

function mouseLeave(){
	console.log("Evento mouse Leave");
	document.getElementById("div-contenido").style.backgroundColor = "#FF0000";
	document.getElementById("div-contenido").style.color = "#fff";
}

function mostrarNombre(){
	alert("Valor ingresado: " + document.getElementById("txt-nombre").value);
}
var asignarValor = function (){
	document.getElementById("txt-nombre").value="Matusalen";
}
function modificarDiv(){
	document.getElementById("div-contenido").innerHTML += "<strong>Este es el nuevo contenido</strong>";
}
