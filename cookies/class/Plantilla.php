<?php

class Plantilla
{
    private array $textos;
    public function __construct($valores){
        foreach ($valores as $valor) {
            $textos[$valor]=str_replace("_"," ",$valor);
        }
        $this->textos = $valores;
    }


    public function get_variables_es()
    {

    }

}