<?php
error_reporting(0);
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
 public function getTotalConsultas(){
  return $this->total_consultas;
  }
  function executeQuery($cons) 
  {
    $this->consulta= mysql_query($cons,$this->conexion->conexion());
    return $this->consulta;
  } 
  
function cleanString($string)
{
    $string=trim($string);
    $string=mysql_escape_string($string);
  $string=htmlspecialchars($string);

    return $string;
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
  $cadena = str_replace ($cadBuscar, $cadPoner, $cadena); 
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