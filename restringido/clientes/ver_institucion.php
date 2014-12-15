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
		<h1>Mantenedor Institucion</h1>
		<div class="form">
			<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>E-mail</th>
					<th>Estado</th>
					<th>Plan</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Nombre Institución</td>
					<td>Descripción Intitución</td>
					<td>mail@gmail.com</td>
					<td>Activo</td>
					<td>Básico</td>
					<td><a href="./mod_institucion.php">Editar</a></td>
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