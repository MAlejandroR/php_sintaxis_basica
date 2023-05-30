<?php
//6_1_insert

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
if (isset($_POST['submit'])){
   $bd = new DataBase();
   $cod = $_POST['cod'];
   $mensaje =$bd->borrar($cod);
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
    ID del usuario a borrar <input type="text" name="cod" id=""><br>
    <input type="submit" value="Borrar" name="submit">
</form>
</fieldset>
</body>
</html>