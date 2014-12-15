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
			<?php
			include 'include/nav.php';
			?>
	</header>
		<h1>Mantenedor Alumnos</h1>
		<div class="form scroll">
		<p class="left">
			Ingrese Rut
			<input type="search" class="buscar" id="buscar" /> <input type="submit" value="Buscar"/>
		</p>
		
			<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Rut</th>
					<th>Dirección</th>
					<th>E-mail</th>
					<th>Telefono</th>
					<th>Asignar</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Juan</td>
					<td>Perez</td>
					<td>11.111.111-1</td>
					<td>Avenida 123</td>
					<td>mail@gmail.com</td>
					<td>9999999999</td>
					<td><a href="#">Asignar</a></td>
					<td><a href="#">Editar</a></td>
					<td><a href="#">Eliminar</a></td>
				</tr>
			</tbody>
			</table>
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