<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/menu_estilo.css">	
</head>
<body>
	<div class="contenedor">
		<header>
			<nav>
				<div class="logo">
					<img src="img/logo.png" alt="logo">
				</div>
				<ul>
					<li><a href="index.php">INICIO</a> </li>
					<li><a href="#">PLANES</a> </li>
					<li><a href="#">INGRESAR</a> </li>
					<li><a href="#">CONTACTO</a></li>
				</ul>
			</nav>
		</header>
		<div class="login">
			<form action="validar.php" method="POST">
				<span>Email </span> <input type="email" class="input_text" type="email" name="email" id="email"/>
				<span>Contraseña</span><input class="input_text" type="password" name="pass" id="pass"/>
				<input class="boton" type="submit" value="Ingresar"/><input class="boton" type="button" value="Registrar" name="reg" id="reg"/>
			</form>
		</div>
		<div class="img">
			<img src="img/bg.png" width="500" alt="">
		</div>
		</div>
</body>
</html>