<?php
//5_valorar_conexion
require 'conexion.php';

try{
    $conexion = new mysqli($host,$user,$password,$database,$port);
    echo "<h1>Conectado satisfactoriamente</h1>";
}catch(mysqli_sql_exception  $error){

    //si quiero acceder a los atributos del error
    $errorMessage = mysqli_connect_error();
    $errorCode = mysqli_connect_errno();
    echo "Error de conexión: $errorMessage (Código: $errorCode)<br />";

    //En cualquier caso getMessage nos dará la información
    die ("Error conectando de la excepción ". $error->getMessage());
}

/*Este código no funcionaría, antes sí que se usaba
$conexion = new mysqli($host,$user,$password,$database,$port);
    if ($conexion->connect_errno!=0)
        die ("Error conectando ". $conexion->connect_error);
 */
