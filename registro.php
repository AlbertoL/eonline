<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./css/normalize.css"/>
	<link rel="stylesheet" href="./css/css_registro.css">
	<script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="./js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="./js/jquery.Rut.js"></script>
	<script type="text/javascript" src="./js/validar.js"></script>
	<script type="text/javascript">
		function validar(nombre,apellido){
				var xmlhttp;
				if (window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}
				else{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("frm").innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("POST","./controlador/validar.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("n="+nombre+"&a="+apellido);
			};
	</script>
	<script type="text/javascript">
		function presion_bot(){
			var nombre = document.getElementById('nombre').value;
			var apellido = document.getElementById('apellido').value;
			validar(nombre,apellido);
		}
	</script>
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
		<div class="frm" id="frm">
			<h2>Ingrese Sus Datos</h2>
			<form id="frmRegistro" class="frmRegistro" method="POST">
			<div class="personal_date">
				<h3>Datos Personales</h3>
				<p>Nombre*</p>
				<input type="text" name="nombre" id="nombre" required />
				<p>Apellido*</p>
				<input type="text" name="apellido" id="apellido"  required/>
				<p>Rut*</p>
				<input type="text" name="rut_cl" id="rut_cl" placeholder="x.xxx.xxx-x" required/>
				<p>Contraseña</p>
				<input type="password" name="pass" id="pass" required/>
			</div>
			<div class="personal_contact">
				<h3>Forma de Contacto</h3>
				<p>Dirección*</p>
				<input type="text" name="direccion" id="direccion" required />
				<p>E-mail*</p>
				<input type="text" name="email" id="email" class="mail" />
				<p>Teléfono*</p>
				<input type="text" name="tel" id="tel"  required/>
				<h3>Plan</h3>
				<select name="plan" id="plan">
					<option value="1">PLAN BÁSICO</option>
					<option value="2">PLAN PLUS</option>
					<option value="3">PLAN PREMIUM</option>
				</select>
				<p></p>
				<input id="btn" class="btn" type="button" onclick="presion_bot()" value="Registrar">
			</div>
			</form>
		</div>
	</div>
</body>
</html>
</body>
</html>