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
if (isset($_POST['submit'])){

//Leemos los datos de las variables de entorno
    $user = $_ENV['USER_DATABASE'];
    $password = $_ENV['PASSWORD'];
    $database = $_ENV['DATABASE'];
    $port = $_ENV['PORT'];
    $host = $_ENV['HOST'];

    $conexion = new mysqli($host, $user, $password, $database, $port);
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $sentencia = "insert into usuarios (nombre, password) values
            ('$nombre', '$password')";
    try {
        $conexion->query($sentencia);
        $mensaje = "Se ha insertado correctamente usuario con id ".$conexion->insert_id;
    } catch (mysqli_sql_exception $ex) {
        $mensaje = "Error insertado " . $ex->getMessage();
    }

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
    <h1><?=$mensaje ??""?></h1>
<form action="index.php" method="post">
    Usuario <input type="text" name="nombre" id=""><br>
    Password <input type="text" name="password" id=""><br>
    <input type="submit" value="Insertar" name="submit">
</form>
    </fieldset>
</body>
</html>
