
<?php
//7_1_delete
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
    $cod = $_POST['cod'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $sentencia =<<<FIN
        update usuarios 
        set nombre = '$nombre', password = '$password'
        where cod = $cod
FIN;
    try {
        $conexion->query($sentencia);
        $registros= $conexion->affected_rows;
        $plural = ($registros>1||$registros==0)? "s" :""; //para añadir o no una s
        $mensaje = "Se han actualizado $registros usuario".($registros>1 OR $registros==0?"s":"");
    } catch (mysqli_sql_exception $ex) {
        $mensaje = "Error actualizando " . $ex->getMessage();
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
        cod del usuario a actualizar <input type="text" name="cod" id=""><br>
        <h1>Nuevos datos de usuario </h1>
        Usuario <input type="text" name="nombre" id=""><br>
        Password <input type="text" name="password" id=""><br>

        <input type="submit" value="Actualizar" name="submit">
    </form>
</fieldset>
</body>
</html>
