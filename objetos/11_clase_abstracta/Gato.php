<?php

class Gato extends Animal
{
    public function __construct($raza, $nombre)
    {
        parent::__construct(4, $raza, $nombre);
    }
    public function hablar()
    {
        return "Miau";
    }
    public function __toString()
    {
        return "Gato: ".parent::__toString(); // TODO: Change the autogenerated stub
    }

}