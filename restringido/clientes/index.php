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
		<h1>Mantenedores</h1>
		<div class="mantenedores">
			<div class="secciones">
				<img src="img/icons/black268.png" height="80" width="128" alt=""> 
				<h3>Cursos</h3> 
				<input type="button" value="ver">
				<input type="button" value="nuevo" onclick="window.location='./n_curso.php';">
			</div>
			<div class="secciones">
				<img src="img/icons/career.png" height="89" width="128" alt=""> 
				<h3>Encargados</h3> 
				<input type="button" value="ver">
				<input type="button" value="nuevo">
			</div>
			<div class="secciones">
				<img src="img/icons/teacher.png" height="128" width="128" alt=""> 
				<h3>Profesores</h3> 
				<input type="button" value="ver">
				<input type="button" value="nuevo">
			</div>
			<div class="secciones">
				<img src="img/icons/class6.png" height="130" width="128" alt=""> 
				<h3>Alumnos</h3> 
				<input type="button" value="ver">
				<input type="button" value="nuevo" onclick="window.location='./n_alumno.php';">
			</div>
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