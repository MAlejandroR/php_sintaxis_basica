<?php
//9_1_select

ini_set("display_errors", 1);
error_reporting(E_ALL);

// bases_datos/acceso_basico_con_env.php
require "./vendor/autoload.php";
$carga = fn($clase)=>require("$clase.php");
spl_autoload_register($carga);

//Primero especificamos la ubicación y nombre del fichero .env.
// En caso de llamarse de otra forma, lo especificaríamos
// __DIR__."otro_nombre"
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//Se puede usar la función safeload() para que no genere una excepción
//si no encuentra el fichero
$dotenv->load();


//Leemos los datos de las variables de entorno
$user = $_ENV['USER_DATABASE'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];
$port = $_ENV['PORT'];
$host = $_ENV['HOST'];


$conexion = new mysqli($host, $user, $password, $database, $port);
$sentencia ="select * from usuarios";
try {
    $resultado_filas = $conexion->query($sentencia);
    foreach ($resultado_filas as $fila)
        var_dump($fila);
} catch (mysqli_sql_exception $ex) {
    $mensaje = "Error consultado " . $ex->getMessage();
}
$resultado_filas->data_seek(0);
while (($fila=$resultado_filas->fetch_array())!==null){
    var_dump($fila);
}
$resultado_filas->data_seek(0);
while (($fila=$resultado_filas->fetch_object())!==null){
    var_dump($fila);
}
$resultado_filas->data_seek(0);
while (($fila=$resultado_filas->fetch_row())!==null){
    var_dump($fila);
}
$resultado_filas->data_seek(0);
while (($fila=$resultado_filas->fetch_assoc())!==null){
    var_dump($fila);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Datos de usuario</legend>
    <h1><?= $mensaje ?? "" ?></h1>
    <form action="index.php" method="post">
        cod del usuario a actualizar <input type="text" name="cod" id=""><br>
        <h1>Nuevos datos de usuario </h1>
        Usuario <input type="text" name="nombre" id=""><br>
        Password <input type="text" name="password" id=""><br>

        <input type="submit" value="Actualizar" name="submit">
    </form>
</fieldset>
</body>
</html>
