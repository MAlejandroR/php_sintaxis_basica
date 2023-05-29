<?php
// bases_datos/acceso_basico_con_env.php
require "./vendor/autoload.php";


//Primero especificamos la ubicación y nombre del fichero .env.
// En caso de llamarse de otra forma, lo especificaríamos
// __DIR__."otro_nombre"
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//Se puede usar la función safeload() para que no genere una excepción
//si no encuentra el fichero
$dotenv->load();

//Leemos los datos de las variables de entorno
$user=$_ENV['USER_DATABASE'];
$password=$_ENV['PASSWORD'];
$database=$_ENV['DATABASE'];
$port=$_ENV['PORT'];
$host =$_ENV['HOST'];


$conexion = new mysqli($host,$user,$password,$database,$port);
var_dump($conexion);

