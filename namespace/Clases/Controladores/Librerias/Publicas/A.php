<?php
namespace Clases\Controladores\Librerias\Publicas;

class A
{
    public function __toString(): string
    {
        return "Hola desde <span style='color:red'>A</span> ubicada en <span style='color:red'>" . __NAMESPACE__ . "</span>";
    }
}