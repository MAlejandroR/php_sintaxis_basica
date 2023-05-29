<?php
//6_1_insert
ini_set("display_errors", 1);
error_reporting(E_ALL);

// bases_datos/acceso_basico_con_env.php
require "./vendor/autoload.php";



$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_POST['submit'])) {

//Leemos los datos de las variables de entorno
    $user = $_ENV['USER_DATABASE'];
    $password = $_ENV['PASSWORD'];
    $database = $_ENV['DATABASE'];
    $port = $_ENV['PORT'];
    $host = $_ENV['HOST'];


    $conexion = new mysqli($host, $user, $password, $database, $port);
    $id = $_POST['id'];
    $sentencia = "delete from  usuarios where cod=$id";
    try {
        $conexion->query($sentencia);
        $registros= $conexion->affected_rows;
        $mensaje = "Se han borrado $registros usuario".($registros>1?"s":"");

    } catch (mysqli_sql_exception $ex) {
        $mensaje = "Error borrando " . $ex->getMessage();
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
    <h1><?= $mensaje ?? "" ?></h1>
    <form action="index.php" method="post">
        ID del usuario a borrar <input type="text" name="id" id=""><br>

        <input type="submit" value="Borrar" name="submit">
    </form>
</fieldset>
</body>
</html>
