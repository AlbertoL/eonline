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
					<li><a href="./planes.php">PLANES</a> </li>
					<li><a href="./login.php">INGRESAR</a> </li>
					<li><a href="./contacto.php">CONTACTO</a></li>
				</ul>
			</nav>
		</header>
		<h2>Ingreso Docente</h2>
		<form id="frmUsuario" name="frmUsuario" action="#" method="POST">
		<div class="login">
				<span>Rut </span> <input type="text" class="input_text" name="username" id="username" autocomplete="off" required/>
				<span>Contraseña</span><input class="input_text" type="password" name="clave" id="clave" autocomplete="off" required/>
				 <div id="msgUsuario" ></div><div id="datos" name="datos"></div>
				<input class="boton" type="submit" id='boton' name='boton' value="Ingresar" />
				<!-- <div class="boton" id="loginusuario" name="loginusuario">entrar</div> -->
				<input class="boton" type="button" value="Registrar" name="reg" id="reg" onclick="window.location='./registro.php';"/>

		</div>
		</form>
		<div class="img">
			<img src="img/bg.png" width="500" alt="">
		</div>
		</div>
		
		<script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="./js/modernizr.js"></script>
		<script type="text/javascript" src="./js/procesar.js"></script>
		<script type="text/javascript" src="./js/val/jquery.Rut.js"></script>
		<script type="text/javascript" src="./js/val/jquery.Rut.min.js"></script>
		<script type="text/javascript">
    			$(document).ready(function(){
   				 $('#username').Rut({
    					on_error: function(){; $('#boton').attr("disabled", true); $("#msgUsuario").html("Rut Incorrecto")},
    					on_success:  function(){ $('#boton').attr("disabled", false);$("#msgUsuario").html("")},
   					 format_on: 'keyup'
    					});
    			});
    </script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#cerrar').click(function(){
			$(location).attr('href','../controlador/destruir.php');
		});
	});
	</script>
   </body>
</html>