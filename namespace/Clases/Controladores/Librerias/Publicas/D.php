<?php
namespace Clases\Controladores\Librerias\Publicas;

class D
{
    public function __toString(): string
    {
        return "Hola desde <span style='color:red'>D</span> ubicada en <span style='color:red'>" . __NAMESPACE__ . "</span>";
    }
}