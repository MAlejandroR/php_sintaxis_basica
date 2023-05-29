<?php



class Contacto extends Validar
{

    public function __construct(private string|null $nombre, private string|null $telefono)
    {}
    public function get_nombre():string
    {
        return $this->nombre;
    }

    public function get_telefono():string
    {
        return $this->telefono;
    }
    public function set_telefono(string $telefono):void
    {
        $this->telefono=$telefono;
    }
    public function __toString():string
    {
        return $this->nombre." ".$this->apellido;
    }

}