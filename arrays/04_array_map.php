<?php

$valores = range(1,20);
$cuadrado = fn($x)=>$x*$x;
$cubo = fn($x)=>$x*$x*$x;

$valores_cuadrados = array_map($cuadrado, $valores);
$valores_cubos = array_map($cubo, $valores);

var_dump($valores);
var_dump($valores_cuadrados);
var_dump($valores_cubos);

