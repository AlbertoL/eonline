<?php
error_reporting(E_ALL);
class conexion{
 private $conexion;
 private $total_consultas;

 public function conectar(){
  if(!isset($this->conexion)){


$this->conexion = (mysql_connect('localhost','root','')) or die(mysql_error());
  mysql_select_db("eonline",$this->conexion) or die(mysql_error());  

  mysql_query("SET NAMES 'UTF8'");
  }
  }

 public function consulta($consulta){
  $this->total_consultas++;
  $resultado = mysql_query($consulta,$this->conexion);
  if(!$resultado){
  echo 'MySQL Error: ' . mysql_error();
  exit;
  }
  return $resultado;
  }
 public function fetch_array($consulta){
  return mysql_fetch_array($consulta);
  }
 public function num_rows($consulta){
  return mysql_num_rows($consulta);
  }
  public function affected_rows($consulta){
  $fila = mysql_affected_rows();
  return $fila;
  }
 public function getTotalConsultas(){
  return $this->total_consultas;
  }
  function executeQuery($cons) 
  {
    $this->consulta= mysql_query($cons,$this->conexion->conexion());
    return $this->consulta;
  } 
function limpiarInput($string)
  {
    $string=trim($string);
    $string=stripslashes($string);
    $string=strip_tags($string);
    return $string;
  }  
function cleanString($string)
{
  $string=trim($string);
  $string=stripslashes(strip_tags($string));
  $string=htmlspecialchars($string);
    return $string;
}


function verifica_RUT($rut='') {
  $sep = array();  $multi = 2;  $suma = 0;
  if (empty($rut)) return 1;
  $tmpRUT = preg_replace('/[^0-9kK]/','',$rut);
  if (strlen($tmpRUT) == 8 ) $tmpRUT = '0'.$tmpRUT;
  if (strlen($tmpRUT) != 9) return 2;
  $sep['rut'] = substr($tmpRUT,0,8);
  $sep['dv']  = substr($tmpRUT, -1);
  if ($sep['dv'] == 'k') $sep['dv'] = 'K';
  if (!is_numeric($sep['rut'])) return 3;
  if (empty($sep['rut']) OR $sep['dv'] == '') return 4;
  for ($i=strlen($sep['rut']) - 1; $i >= 0; $i--) {
    $suma = $suma + $sep['rut'][$i] * $multi;
    if ($multi == 7) $multi = 2;
    else $multi++;
  }
  $resto = $suma % 11;
  if ($resto == 1) $sep['dvt'] = 'K';
  else {
    if ($resto == 0) $sep['dvt'] = '0';
    else $sep['dvt'] = 11 - $resto;
  }
  if ($sep['dvt'] != $sep['dv']) return 5;
  return 0;
}

function fechaSql($fecha_nom){
$patron = explode("/", $fecha_nom);
$fechana=$patron[2]."-".$patron[0]."-".$patron[1];
return $fechana;
}
function fechaNormal($fecha_nom){
$patron = explode("-", $fecha_nom);
$fechana=$patron[2]."-".$patron[1]."-".$patron[0];
return $fechana;
}

function quitar_tildes ($cadena) 
{ 
  $cadBuscar = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú"); 
  $cadPoner = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U"); 
  $cadena = str_replace($cadBuscar, $cadPoner, $cadena); 
  $cadena=  strtoupper($cadena);
  return $cadena; 
} 

function colocar_tildes ($cadena) 
{ 
    $cadBuscar = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U"); 
  $cadPoner   = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú"); 
  

  $cadena = str_replace ($cadBuscar, $cadPoner, $cadena); 
  $cadena=  strtoupper($cadena);
  return $cadena; 
} 
  
  }