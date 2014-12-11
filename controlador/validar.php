<?php
include '../archivo/conexion.php';
$db=new conexion();
$db->conectar();
$nombre=$db->cleanString($_POST['n']);
$apellido=$db->cleanString($_POST['a']);
$pass=$db->cleanString($_POST['p']);
$direccion=$db->cleanString($_POST['d']);
$email = filter_var($_POST['e'], FILTER_SANITIZE_EMAIL);
$telefono=$db->cleanString($_POST['t']);
$tipo = 2;

$error_validacion = "";

if (empty($nombre)) {
	$error_validacion .= "* El campo nombre está vacío <br/> ";
}
elseif(preg_match("/[^a-záéíóúàèìòùäëïöüñ\s]/i", $nombre)){
	$error_validacion .= "* Campo nombre: Solo letras <br/> ";
}
if (empty($apellido)) {
	$error_validacion .= "* El campo apellido está vacío <br/> ";
}elseif(preg_match("/[^a-záéíóúàèìòùäëïöüñ\s]/i", $apellido)){
	$error_validacion .= "* Campo apellido: Debe contener solo letras <br/> ";
}
if (isset($_POST['r'])) {
  $error = $db->verifica_RUT($_POST['r']);
  switch($error) {
    case 0 : $rut = $_POST['r']; break;
    case 1 : $error_validacion .='* Rut viene vacío <br/>'; break;
    case 2 : $error_validacion .='* El rut no viene con el mínimo de caracteres necesarios para validarlo <br/>'; break;
    case 3 : $error_validacion .='* El rut no viene en un formato numérico <br/>'; break;
    case 4 : $error_validacion .='* El rut o el dígito viene vacío. <br/>'; break;
    case 5 : $error_validacion .='* El rut y el dígito verificador no coinciden <br/>'; break;
    default: $error_validacion .='* Error de la décimanovena dimensión!!! Corran en círculos!!! <br/>'; break;
  }
}
if (empty($pass)) {
	$error_validacion .= "* El campo contraseña está vacío <br/> ";
}
elseif(preg_match("/[^a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9]$/", $pass) || strlen($pass) < 4 || strlen($pass) > 11){
	$error_validacion .= "* Contraseña con formato incorrecto <br/> ";
}
if (empty($direccion)) {
	$error_validacion .= "* El campo direccion está vacío <br/> ";
}
elseif (preg_match("/[^a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9]$/", $direccion) || strlen($direccion) < 5 || strlen($direccion) > 50) {
	$error_validacion .= "* Direccion en formato incorrecto <br/> ";
}
if (empty($email)) {
	$error_validacion .= "* El campo email está vacío <br/> ";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error_validacion .= "* El Email no es valido <br/>";
}
if (empty($telefono)) {
	$error_validacion .= "* El campo telefono está vacío <br/> ";
}elseif (preg_match("/[^0-9\-\s]$/i", $telefono)) {
	$error_validacion .= "* Telefono en formato incorrecto codigo - número";
}

if ($error_validacion == "") {
		$consulta = $db->consulta("SELECT * FROM tb_usuario WHERE u_rut ='$rut'");
		if ($db->num_rows($consulta)==0) {
			$consulta2 = $db->consulta("INSERT INTO tb_usuario(u_nombre,u_apellido,u_rut,u_direccion,u_email,u_fono,u_password,id_tipo_usuario) values ('$nombre','$apellido','$rut','$direccion','$email','$telefono','$pass','$tipo')");
			// echo "usuario registrado correctamente";

			if($db->affected_rows($consulta2) == 1){
  				$mensaje="Insercion exitosa";
     echo"<script>";
 echo"if(confirm('$mensaje'));";
  echo"window.location='mantenedorDigitador.php';"; 
   echo"</script>";
			}
			else{
   				echo "Algo salió mal";
				}
		}else{
			$error_validacion .= "El usuario ya existe";
			echo '<h2>Ingrese Sus Datos</h2><p class=msg_error_php>'.$error_validacion.'</p>
			<div class="personal_date" id="personal_date">
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
				<p></p>
				<input id="btn" class="btn" type="button" onclick="presion_bot()" value="Registrar">
			</div>';
		}
}
else{
	echo '<h2>Ingrese Sus Datos</h2><p class=msg_error_php>'.$error_validacion.'</p>
			<div class="personal_date" id="personal_date">
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
				<p></p>
				<input id="btn" class="btn" type="button" onclick="presion_bot()" value="Registrar">
			</div>';
}
?>

