<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>E-OnLine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css"/>
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
					<li><a href="./login.php">INGRESAR</a> </li>
					<li><a href="./contacto.php">CONTACTO</a></li>
				</ul>
			</nav>
			<div class="titulo">
				<h1>CURSOS, CAPACITACIÓN, ONLINE</h1>
				<h2>DESCUBRE LAS HERRAMIENTAS QUE TENEMOS PARA TI</h2>
				<div class="boton">
					<a href="#">CONOCER MÁS</a>
				</div>
			</div>
		</header>
		<div class="bienvenidos">
			<h2>Bienvenidos a Educación On-Line</h2>
			<p>E-online busca gestionar y apoyar el proceso de aprendizaje de instituciones y profesores, 
			brindando una plataforma web que les permita desarrollar un enfoque distinto en 
			el área de la enseñanza, trayendo beneficios a estos en tiempo, optimización en 
			el uso de instalaciones y recursos.
			E-online permite entregar a instituciones y profesores independientes 
			una plataforma online en el cual podrán compartir contenido académico a 
			través de distintos contenidos multimedia. 
			</p>
		</div>
		<div class="icon_descripcion">
		<h2>Encontrarás</h2>
			<div class="icon_resena">
				<img src="img/icon/cloud.png" alt="cloud">
				<h2>Sube Archivos</h2>
			</div>
			<div class="icon_resena">
				<img src="img/icon/note.png" alt="note">
				<h2>Crea Test</h2>
			</div>
			<div class="icon_resena">
			<img src="img/icon/chat.png"  alt="chat">
				<h2>Chat</h2>
			</div>
			<div class="icon_resena">
			<img src="./img/icon/video.png" alt="video">
				<h2>Videos</h2>
			</div>
		</div>
		<div class="auspiciadores">
			<h2>Confían en nosotros</h2>
			<div class="logo_cca">
			<img src="img/cca.jpg" height="128" width="375" alt="cca">
			</div>
			<div class="descripcion_cca">
			<p>Centro de Capacitación Angol Ltda. con años de experiencia en la ciudad de Angol, brindando capacitación
			a un sin número de personas de la comunidad angolina. CCA cuenta con certificaciones SENSE (Servicio Nacional de Capacitación y Empleo),
			los cuales les permitirá acceder a certificaciones ISO:9001:2008

			</p>
			</div>
		</div>
		<div class="des_promo">
			<div class="p_promo">
				<h2>Experimenta una nueva forma de enseñar</h2>
				<p>Como docente puedes desarrollar tus competencias y habilidades
				creando tus propios cursos de capacitación.
				</p>
				<ul>
					<li>Genera cursos</li>
					<li>Gestiona materiales</li>
					<li>Comparte videos</li>
					<li>Clases en vivo</li>
					<li>Evaluaciones</li>
				</ul>
			</div>
			<div class="logo_promo">
				<img src="img/logo_school.png"  alt="logo"/>
			</div>
		</div>
		<div class="inicia">
		<h2><a href="#">INICIA TU PROJECTO CON NOSOTROS <img src="img/icon/power.png" alt="power"></a></h2>
		</div>
		<div class="pie">
			<div class="pie_seccion">
				<h3>Contacto</h3>
				<form action="./p_contacto.php">
					<span>Asunto : </span><input type="text" name="asunto" id="asunto" required placeholder="Motivo Condulta"/>
					<span>Email : </span><input type="email" name="email" id="email" placeholder="Escribe tu correo" required/>
					<span>Mensaje</span><textarea name="mensaje" id="mensaje" cols="30" rows="6"></textarea>
					<input type="submit" class="submit" name="submit" value="Enviar"/>
				</form>
			</div>
			<div class="pie_seccion">
				<img src="./img/logo.png" height="103" width="427" alt="">
				<h2>Cursos y Capacitación On-Line</h2>
			</div>
		</div>
	</div>
</body>
</html>