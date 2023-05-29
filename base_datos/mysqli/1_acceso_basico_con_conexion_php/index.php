<?php
// 1_acceso_basico_con_conexion_php/index.php
require "conexion.php";



$user=USER_DATABASE;
$password=PASSWORD;
$database=DATABASE;
$port=PORT;
$host =HOST;


$conexion = new mysqli($host,$user,$password,$database,$port);
var_dump($conexion);

