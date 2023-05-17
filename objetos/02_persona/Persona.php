<?php

class Persona{
    private string $nombre;
    private string $apellido;
    private string $password;
    private string $email;
    private int $edad;

    public function __construct( string $nombre,  string $apellido, string $direccoin, int $edad){

    }




    public function __toString():string{
        return "Nombre: $this->nombre, Apellido: $this->apellido";
    }

}
