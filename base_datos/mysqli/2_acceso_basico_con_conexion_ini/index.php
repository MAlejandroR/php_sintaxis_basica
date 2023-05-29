<?php
// mysqli/bases_datos/acceso_basico_con_conexion_ini

$datos = parse_ini_file("./conexion.ini");

$user=$datos['USER_DATABASE'];
$password=$datos['PASSWORD'];
$database=$datos['DATABASE'];
$port=$datos['PORT'];
$host =$datos['HOST'];


$conexion = new mysqli($host,$user,$password,$database,$port);
var_dump($conexion);

