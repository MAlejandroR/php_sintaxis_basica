<?php
namespace Clases\Controladores\Vistas;
class F
{
    public function __toString(): string
    {
        return "Hola desde <span style='color:red'>F</span> ubicada en <span style='color:red'>" . __NAMESPACE__ . "</span>";
    }
}