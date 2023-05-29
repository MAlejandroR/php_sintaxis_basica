<?php
// bases_datos/acceso_basico_con_env.php
require "./vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Leemos los datos de las variables de entorno
$user=$_ENV['USER_DATABASE'];
$password=$_ENV['PASSWORD'];
$database=$_ENV['DATABASE'];
$port=$_ENV['PORT'];
$host ='localhost';