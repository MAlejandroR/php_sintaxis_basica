<?php
// Path: arrays/02_crear_array.php

//Creando un array sin especificar los índices
$valores = [1,2,3,4,5,6];

$valores_1=array(1,2,3,4,5,6);

var_dump($valores);
var_dump($valores_1);

//Creando un array especificando los índices
$notas=array("Juan"=>5,"Pedro"=>6,"Ana"=>7,"Rosa"=>9);

$notas_1 =["Juan"=>5,"Pedro"=>6,"Ana"=>7,"Rosa"=>9];

var_dump($notas);
var_dump($notas_1);

//Creando un array especificando algún indice
$valores = ["María",4=>"Juan",8=>"Pedro","Nieves",20=>"Ana","Rosa"];
var_dump($valores);
