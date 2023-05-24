<?php
namespace Clases\Controladores\Librerias\Privadas;
class A
{
    public function __toString(): string
    {
     return "Hola desde <span style='color:red'>A</span> ubicada en <span style='color:red'>".__NAMESPACE__."</span>";   // TODO: Implement __toString() method.
    }

}