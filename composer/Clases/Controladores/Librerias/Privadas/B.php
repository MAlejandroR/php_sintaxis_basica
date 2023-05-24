<?php
namespace Clases\Controladores\Librerias\Privadas;
class B
{
    public function __toString(): string
    {
        return "Hola desde <span style='color:red'>B</span> ubicada en <span style='color:red'>" . __NAMESPACE__ . "</span>";
    }
}