<?php

class DataBase
{
    private mysqli $conexion;


    public function __construct()
    {

//Leemos los datos de las variables de entorno
        $user = $_ENV['USER_DATABASE'];
        $password = $_ENV['PASSWORD'];
        $database = $_ENV['DATABASE'];
        $port = $_ENV['PORT'];
        $host = $_ENV['HOST'];


        try {
            $this->conexion = new mysqli($host, $user, $password, $database, $port);
        } catch (mysqli_sql_exception  $error) {
            die ("Error conectando de la excepción " . $error->getMessage());
        }

    }

    public function inserta(mixed $nombre, mixed $password)
    {
        $sentencia = "insert into usuarios (nombre, password) 
                      values ('$nombre', '$password')";
        try {
            $this->conexion->query($sentencia);
            return  "Se ha insertado correctaemnte $nombre";
        } catch (mysqli_sql_exception $ex) {
            return  "Error insertado " . $ex->getMessage();
        }
    }

}