<?php
// Path: arrays/02_crear_array.php

$notas = range(1, 10);
var_dump($notas);


//Creando un array sin especificar los índices
$notas = array_fill(0, 10, rand(1,10));
var_dump($notas);


$inicializa = fn()=>rand(1,10);
$notas_inicializadas= array_map($inicializa, $notas);
var_dump($notas_inicializadas);
var_dump($notas);