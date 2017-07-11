<?php 

	$iconos=array();
	$archivo = fopen("data/iconos.csv","r");
	while(!feof($archivo)){
		$iconos[] = fgets($archivo);
	}
	fclose($archivo);


	//$categorias=array();
	$categorias[]='Juegos';
	$categorias[]='Redes sociales';
	$categorias[]='Entretenimiento';


	$desarrolladores[] = 'Juan';
	$desarrolladores[] = 'Pedro';
	$desarrolladores[] = 'Steve Jobs';
	$desarrolladores[] = 'Mark Zucaritas';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oh no, Examen práctico</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--- INICIO DEL FORMULARIO -->
				<form action="index.php" method="GET">
					<table class = "table table-striped table-hover">
						<tr>
							<td>Nombre aplicación:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Descripción:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de publicación:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Calificación promedio:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>URL:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Tamaño archivo:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Icono:</td>
							<td>
								<select name="" id="" class="form-control">
									<?php 
										for($i=0; $i<sizeof($iconos); $i++)
											echo '<option value="'.$iconos[$i].'">'.$iconos[$i].'</option>'
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Categorias:</td>
							<td>
								<?php 
									for($i=0; $i<sizeof($categorias);$i++){
										echo '<label><input type="checkbox" name="categorias[]" value="'.$categorias[$i].'">'.$categorias[$i].'</label><br>';
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de actualización:</td>
							<td>
								<input type="text" name="" id="" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Desarrollador:</td>
							<td>
								<select name="" id="" class="form-control">
									<?php
										for ($i=0; $i < sizeof($desarrolladores); $i++) { 
											echo '<option value="'.$desarrolladores[$i]. '">'.$desarrolladores[$i]. '</option>';
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="btn-guardar" 
								value="Guardar" class="btn btn-primary">
								<input type="reset" name="btn-limpiar" 
								value="Limpiar" class="btn btn-warning">
							</td>
						</tr>
					</table>
				</form>
				<!--- FIN DEL FORMULARIO -->
			</div>
			<!--Listado de las aplicaciones-->
			<div class="col-lg-6">
				<div class="row">
					<!-- Inicio de la lista de aplicaciones -->
					<!-- en esta parte debe codificar -->
					<!-- PLANTILLA:
					
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<div class="well">
							<img src="#URL_ICONO#" class="img-responsive">
							<b>#NOMBRE_APLICACION# </b><br>
							<span class="label label-primary">#CALIFICACION#</span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
							#DESCRIPCION#<br>
							Versión: <b>#VERSION_APLICACION#</b><br>
							<a href="#URL_APLICACION#">Descargar</a>
						</div>
					</div>

					 -->

					<!--TARJETA DE PRUEBA 1-->
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<div class="well">
							<img src="img/icono1.png" class="img-responsive">
							<b>Feizbuk</b>
							<span class="label label-primary">5</span> 
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
							Esta es la descripción<br>
							Versión: <b>1.0</b><br>
							<a href="apks/aplicacion1.apk">Descargar</a>
						</div>
					</div>
					<!--TARJETA DE PRUEBA 2-->
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<div class="well">
							<img src="img/icono2.png" class="img-responsive">
							<b>Yutub</b>
							<span class="label label-primary">3</span> 
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
							Esta es la descripción<br>
							Versión: <b>1.0</b><br>
							<a href="apks/aplicacion1.apk">Descargar</a>
						</div>
					</div>
					<!--TARJETA DE PRUEBA 3-->
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<div class="well">
							<img src="img/icono3.png" class="img-responsive">
							<b>Clachofclan</b>
							<span class="label label-primary">4</span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
							Esta es la descripción<br>
							Versión: <b>1.0</b><br>
							<a href="apks/aplicacion1.apk">Descargar</a>
						</div>
					</div>
					<!--TARJETA DE PRUEBA 4-->
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<div class="well">
							<img src="img/icono4.png" class="img-responsive">
							<b>Candicruch</b>
							<span class="label label-primary">4</span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
							Esta es la descripción<br>
							Versión: <b>1.0</b><br>
							<a href="apks/aplicacion1.apk">Descargar</a>
						</div>
					</div>
					<!--TARJETA DE PRUEBA 5-->
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<div class="well">
							<img src="img/icono5.png" class="img-responsive">
							<b>Guazap</b>
							<span class="label label-primary">4</span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
							Esta es la descripción<br>
							Versión: <b>1.0</b><br>
							<a href="apks/aplicacion1.apk">Descargar</a>
						</div>
					</div>
					<!-- Fin de la lista de aplicaciones -->
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>