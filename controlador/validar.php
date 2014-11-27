<?php
include '../archivo/conexion.php';
$db=new conexion();
$db->conectar();
$nombre=$db->cleanString($_POST['n']);
$apellido=$db->cleanString($_POST['a']);
$rut=$db->validaRut($_POST['r']);
$pass=$db->cleanString($_POST['p']);
$direccion=$db->cleanString($_POST['d']);
$email = filter_var($_POST['e'], FILTER_SANITIZE_EMAIL);
$telefono=$db->cleanString($_POST['t']);
echo $telefono;

// if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 	echo "* El Email no es valido <br/>";
// }
// else{
// 	echo "El mail es valido";
// }

// if($r==true){
//         echo "El rut ".$_POST['r']." es valido";
//     }else{
//          echo "El rut ".$_POST['r']." no es correcto";
//     }



// $nombre=$db->$_POST['n'];
// $apellido=$db->$_POST['a'];
// $n= "Alberto";
// $a="hola";
// $direccion=limpiarInput($_POST['d'])
// $pass=$_POST['p'];
// $correo=$_POST['e'];
// $rut=$_POST['r'];
// $plan=$_POST['pl'];

// foreach ($_POST as $key => $value) {
// 	echo $key." ....> ".$value."<br>";
// }

// $consulta = $db->consulta("INSERT INTO usuario(id_usuario, nombre, apellido, direccion, clave, correo, rut) values(NULL,'".$nombre."','".$apellido."','".$direccion."','".$pass."','".$correo."','".$rut."')");

// if ($n == $nombre && $a == $apellido) {
// echo '<h2 style>ES CORRECTO </h2>';
// }
// else{
// 	echo '<h2 style>NO ES CORRECTO </h2>';
// }


?>


<?php
// $n=$db->cleanString($_POST['n']);
// $a=$db->cleanString($_POST['a']);

// $nombre = "Alberto";
// $apellido = "Lopez";

// if ($n == $nombre && $a == $apellido) {
// 	echo '<h2 style>ES CORRECTO </h2>';
// }
// else if($n != $nombre){
// 	echo '<div class="tit">formulario</div>
// 		<div class="cont">Rut: <input style="" id="rut" type="text" /></div>
// 		<div class="cont">clave: <input id="clave" type="password" /></div>
// 		<div class="cont"><input onclick="presion_bot()" type="button" value="validar" /></div>
// 		<div class="clear"></div>';
// }
// else if ($a != $apellido)
// 	echo '<h2 style>POLLOLAIS </h2>';
?>