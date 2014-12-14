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
					<li><a href="#">Asignaturas</a></li>
					<li><a href="#">Profesores</a></li>
					<li><a href="#">Alumnos</a></li>
				</ul>
			</nav>
	</header>
		<h1>Mantenedores</h1>
		<div class="mantenedores">
		<div class="secciones">
				<img src="img/icons/factory3.png" alt="img_institucion"> 
				<h3>Instituciones</h3> 
				<input type="button" value="ver" onclick="window.location='./ver_institucion.php';">
				<input type="button" value="crear" onclick="window.location='./n_institucion.php';">
			</div>
			<div class="secciones">
				<img src="img/icons/books8.png" alt="img_cursos"> 
				<h3>Cursos</h3> 
				<input type="button" value="ver" onclick="window.location='./ver_curso.php';">
				<input type="button" value="crear" onclick="window.location='./n_curso.php';">
			</div>
			<div class="secciones">
				<img src="img/icons/teacher.png" alt="img_profesor"> 
				<h3>Profesores</h3> 
				<input type="button" value="ver" onclick="window.location='./ver_profesores.php';">
				<input type="button" value="Registrar" onclick="window.location='./n_profesor.php';">
			</div>
			<div class="secciones">
				<img src="img/icons/class6.png" alt="img_alumnos"> 
				<h3>Alumnos</h3> 
				<input type="button" value="ver" onclick="window.location='./ver_alumnos.php';">
				<input type="button" value="Registrar" onclick="window.location='./n_alumnos.php';">
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