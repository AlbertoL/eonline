<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
</head>
<body>
	<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Planes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/normalize.css"/>
	<link rel="stylesheet" href="./css/css_registro.css">
</head>
<body>
	<div class="contenedor">
		<header>
			<nav>
				<div class="logo">
					<img src="img/logo.png" alt="logo">
				</div>
				<ul>
					<li><a href="./index.php">INICIO</a> </li>
					<li><a href="./planes.php">PLANES</a> </li>
					<li><a href="login.php">INGRESAR</a> </li>
					<li><a href="./contacto.php">CONTACTO</a></li>
				</ul>
			</nav>
			<h2>Registro</h2>
		</header>
		<div class="frm">
		<form id="frmRegistro" class="frmRegistro" action="./controlador/procesarformulario.php" method="POST">
		<input type="text" name="nombre" id="nombre" required placeholder="NOMBRE"/>
		<input type="text" name="apellido" id="apellido" placeholder="APELLIDO" required/>
		<input type="text" name="direccion" id="direccion" required placeholder="DIRECCION"/>
		<input type="password" name="pass" id="pass" placeholder="CONTRASEÑA" required/>
		<input type="email" name="email" id="email" placeholder="E-MAIL" required/>
		<input type="text" name="rut" id="rut" placeholder="RUT" required/>
		<input type="submit">
		</form>
		</div>
	</div>
</body>
</html>
</body>
</html>