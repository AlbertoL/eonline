<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="cuerpo">
	<div class="formulario">
	<div class="capa">
	<h3>Registro</h3>
		<form action="./validar.php" method="POST">
			<div class="etiquetas"><span>Nombre</span><input type="text" id="name" name="name" required placeholder="Ingresa tu nombre" autofocus/></div>
			<div class="etiquetas"><span>Apellido</span><input type="text" id="apellido" name="apellido" required placeholder="Ingresa tu apellido"/></div>
			<div class="etiquetas"><span>Rut</span><input type="text" id="rut" name="rut" required placeholder="Ingresa tu rut"/></div>
			<div class="etiquetas"><span>E-mail</span><input type="email" id="email" name="email" required placeholder="Ingresa tu e-mail"/></div>
			<div class="etiquetas"><span>Clave</span><input type="password" id="pass" name="pass" required placeholder="Ingresa tu contraseña"/></div>
			<div class="etiquetas"><span>Telefono</span><input type="text" id="fono" name="fono" required placeholder="Ingresa tu telefono"/></div>
			<div class="etiquetas"><span>Región</span>
				<select name="reg" id="reg">
					<option value="1">Metropolitana</option>
					<option value="2">Bio Bio</option>
					<option value="3">Atacama</option>
				</select>
			</div>
			<div class="etiquetas"><span>Ciudad</span>
				<select name="reg" id="reg">
					<option value="1">Santiago</option>
					<option value="2">Los Angeles</option>
					<option value="3">Angol</option>
				</select>
			</div>
			<input type="submit" class="submit" value="Registrar">
		</form>
		</div>
	</div>
	<div class="login">
		<h4>Asignatura</h4>
		<div class="vin"><span>Nombre</span><input type="text" id="asig" name="asig" maxlenght="50" required placeholder="Nombre asignatura"/></div>
		<div class="vin"><span>Descripción</span><textarea name="des" id="" cols="30" rows="5" placeholder="Descripción asignatura"></textarea></div>
		<input class="boton" type="submit" value="Modificar"/>
		<input class="boton" type="button" value="Cancelar"/>
	</div>
	<div class="tabla">
		<table>
			<tr>
				<td colspan="4">Asignaturas</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Modificar</td>
				<td>Eliminar</td>
			</tr>
			<tr>
				<td>Análisis capilar</td>
				<td>Analisis del cuero cabelludo y ..</td>
				<td><input type="button" value="Modificar"></td>
				<td><input type="button" value="Eliminar"></td>
			</tr>
			<tr>
				<td>Coloración capilar</td>
				<td>Tintes, pinturas...</td>
				<td><input type="button" value="Modificar"></td>
				<td><input type="button" value="Eliminar"></td>
			</tr>

		</table>
	</div>
	<!-- <div class="formulario" class="alto">
	<div class="capa">
	<span>X</span>
		<h2>Datos guardados exitosamente</h2>
	</div>
	</div> -->
</div>
</body>
</html>

<?php






// $nombre = "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
// echo $nombre;
// $chars = strlen($nombre);
// echo $chars;

// if (strlen($nombre) > 50) {
// 	echo "número de maximo de caracteres es de 50";
// }

// //Inicio la sesión
// session_start();
// //COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
// if ($_SESSION["autenticado"] != "SI") {
// //si no existe, va a la página de autenticacion
// header("Location: login.php");
// //salimos de este script
// exit();
// }


// session_destroy();
?>