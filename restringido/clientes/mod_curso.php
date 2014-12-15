<?php 
include '../../controlador/sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel Cliente</title>
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/e_cliente.css">
</head>
<body>
<div class="contenedor">
	<header>
			<nav>
				<div class="logo">
					<img src="img/logo.png" alt="logo">
				</div>
				<ul>
					<li><a href="#">Cursos</a></li>
					<li><a href="#">Encargados</a></li>
					<li><a href="#">Profesores</a></li>
					<li><a href="#">Alumnos</a></li>
				</ul>
			</nav>
	</header>
		<h1>Mantenedor Curso</h1>
		<div class="form">
			<form action="#">
				<div class="datos">
				<h3>Formulario Curso</h3>
				<select name="institucion" id="institucion" class="institucion">
					<option value="0">Institucion</option>
				</select>
				<p>Nombre Curso*</p>
				<input type="text" name="nombre" id="nombre" class="nombre" required />
				<p>Descripción*</p>
				<textarea name="description" id="description" cols="30" rows="10"></textarea>
				<input type="submit" id="boton" class="boton" value="Guardar">
				<a class="cancelar" id="cancelar" href="javascript: history.go(-1)">Cancelar</a>
				</div>


			</form>
		</div>







	</div>

	<script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="./js/modernizr.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#cerrar').click(function(){
			$(location).attr('href','../../controlador/destruir.php');
		});
	});
	</script>
</body>
</html>