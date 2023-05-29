<?php
//4_visualizando_atributos
require 'conexion.php';


$conexion = new mysqli($host, $user, $password, $database, $port);

echo "<h1>Cliente <span style='color:red'>$conexion->client_info</span></h1>";
echo "<h1>Versión en el <span style='color:red'>cliente$conexion->client_version</span></h1>";
echo "<h1>Servidor <span style='color:red'>$conexion->server_info</span></h1>";
echo "<h1>Versión del servidor <span style='color:red'>$conexion->server_version</span></h1>";


