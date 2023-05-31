<?php
    // 1_acceso_basico_con_conexion_php/index.php
    require "conexion.php";

    $user=USER_DATABASE;
    $password=PASSWORD;
    $database=DATABASE;
    $port=PORT;
    $host =HOST;
    $port="23306";

    $dsn = "mysql:host=localhost;dbname=dwes;port=$port";
    $conexion = new PDO($dsn, $user, $password);
    var_dump($conexion);

