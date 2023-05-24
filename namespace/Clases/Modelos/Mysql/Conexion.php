<?php
namespace Clases\Modelos\Mysql;


class Conexion
{
    public function __toString(): string
    {
        return "Hola desde <span style='color:red'>Conexion</span> ubicada en <span style='color:red'>" . __NAMESPACE__ . "</span>";
    }

}