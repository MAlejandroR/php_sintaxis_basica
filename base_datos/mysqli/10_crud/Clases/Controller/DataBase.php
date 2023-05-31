<?php

namespace Controller;

use Model\Usuario;
use mysqli;

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

    public function insert(Usuario $usuario)
    {
        $nombre = $usuario->getNombre();
        $password = $usuario->getPassword();
        if (($nombre==null) &&($password==null))
            return "No se puede insertar un usuario sin nombre y password";
        $sentencia = "insert into usuarios (nombre, password) 
                      values ('$nombre', '$password')";
        try {
            $this->conexion->query($sentencia);
            return "Se ha insertado correctamente usuario con id " . $this->conexion->insert_id;
        } catch (mysqli_sql_exception $ex) {
            return "Error insertado " . $ex->getMessage();
        }
    }

    public function del(Usuario $usuario)
    {
        $codigo = $usuario->getCodigo();
        if ($codigo == null)
            return "No se puede borrar un usuario sin codigo";
        $sentencia = "delete from  usuarios where codigo=$codigo";
        try {
            var_dump($sentencia);
            $this->conexion->query($sentencia);
            $registros = $this->conexion->affected_rows;
            $plural = ($registros > 1 || $registros == 0) ? "s" : ""; //para añadir o no una s
            return "Se han borrado $registros usuario$plural";

        } catch (mysqli_sql_exception $ex) {
            return "Error borrando " . $ex->getMessage();
        }

    }

    public function update(Usuario $usuario)
    {
        $nombre = $usuario->getNombre();
        $password = $usuario->getPassword();
        $codigo = $usuario->getCodigo();
        if ($codigo ==null)
            return "No se puede actualizar un usuario sin codigo";
        $sentencia = "update usuarios set nombre ='$nombre', password='$password' where cod=$id ";
        try {
            $this->conexion->query($sentencia);
            $registros = $this->conexion->affected_rows;
            $plural = ($registros > 1 || $registros == 0) ? "s" : ""; //para añadir o no una s
            return "Se han actualizado $registros usuario$plural";

        } catch (mysqli_sql_exception $ex) {
            return "Error borrando " . $ex->getMessage();
        }

    }

    public function get_all_users()
    {
        $sentencia = "select * from usuarios";
        $filas = $this->conexion->query($sentencia);
        $usuarios = [];
        foreach ($filas as $fila) {
            $usuarios[] = new Usuario($fila['cod'], $fila['nombre'], $fila['password']);
        }
        return $usuarios;

    }

    /**
     * @return array
     * retorna un array con los codigos de los usuarios y sus nombres
     */
    public function get_codigos_nombres()
    {
        $sentencia = "select * from usuarios";
        $filas = $this->conexion->query($sentencia);
        $codigos_nombres = [];
        foreach ($filas as $fila)
            $codigos_nombres[$fila['codigo']] =$fila['nombre'] ;
        return $codigos_nombres;
    }

    public function get_user(int $id)
    {
        $sentencia = "select * from usuarios where codigo = $id";
        $filas = $this->conexion->query($sentencia);
        $fila = $filas->fetch_assoc();
        return new Usuario($fila);

    }


}