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
	 <script>
$(document).ready(function(){
	$.validator.addMethod('nombre', function(value, element)
	{
		return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ\s]+$/i.test(value);
	});
	$.validator.addMethod('apellido', function(value, element)
	{
		return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ\s]+$/i.test(value);
	});
	// $.validator.addMethod('rut', function(value, element)
	// {
	// 	return this.optional(element) || /^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$/.test(value);
	// });
	$.validator.addMethod("rut", function(value, element) {
  	return this.optional(element) || $.Rut.validar(value);
	}, "Este campo debe ser un rut valido.");
	$.validator.addMethod('pass', function(value, element)
	{
		return this.optional(element) || /^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\^&\*\?_~\/]{4,20}$/.test(value);
	});
	$.validator.addMethod('direccion', function(value, element)
	{
		return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ0-9\s]+$/i.test(value);
	});
	$.validator.addMethod('tel', function(value, element)
	{
		return this.optional(element) || /^[0-9\-\s]+$/i.test(value);
	});
	$("#frmRegistro").validate
	({
     		rules:
		{
			nombre: {required: true, nombre: true, minlength: 2, maxlength: 30},
			apellido: {required: true, apellido: true, minlength: 2, maxlength: 30},
			rut_cl: {required: true, rut: true},
			pass: {required: true, pass: true, minlength: 3, maxlength: 10},
			direccion: {required: true, direccion: true, minlength: 5, maxlength: 50},
			email: {required: true, email: true, minlength: 6, maxlength: 40},
			tel: {required: true, tel: true, minlength: 4, maxlength: 20}
		},
		messages:
		{
			nombre: {required: 'Campo requerido', nombre: 'Formato incorrecto', minlength: 'Debe tener al menos 2 letras', maxlength: 'El máximo de caracteres son 30'},
			apellido: {required: 'Campo requerido', apellido: 'Formato incorrecto', minlength: 'Debe tener al menos 2 letras', maxlength: 'El máximo de caracteres son 30'},
			rut_cl: {required: 'Campo requerido', rut: 'Rut invalido'},
			pass: {required: 'Campo requerido', pass: 'Letras y números', minlength: 'Contraseña es muy pequeña', maxlength: 'Contraseña muy larga'},
			direccion: {required: 'Campo requerido', direccion: 'Letras y numeros', minlength: 'direccion muy corta', maxlength: 'Direccion muy grande'},
			email: {required: 'Campo requerido', email: 'name@micuenta.com', minlength: 'El mínimo de caracteres es 5', maxlength: 'El máximo de caracteres son 40'},
			tel: {required: 'Campo requerido', tel: 'codigo - numero', minlength: 'El mínimo de caracteres es 6', maxlength: 'El máximo de caracteres son 20'}
       	}
    	});
	$('#rut_cl').Rut({
		validation: false
	});
});
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
		<div class="frm">
			<h2>Ingrese Sus Datos</h2>
			<form id="frmRegistro" class="frmRegistro" action="../controlador/procesarformulario.php" method="POST">
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
				<input id="btn" class="btn" type="submit" value="Registrar">
			</div>
			</form>

		</div>
	</div>
</body>
</html>
</body>
</html>