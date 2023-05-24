<?php
namespace Clases\Controladores\Librerias\Privadas;

class C
{
    public function __toString(): string
    {
        return "Hola desde <span style='color:red'>C</span> ubicada en <span style='color:red'>" . __NAMESPACE__ . "</span>";
    }
}