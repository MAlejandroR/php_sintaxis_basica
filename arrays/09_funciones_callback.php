<?php

//array_reduce
$numeros =range(1,100);
$suma = fn($x,$y)=>$x+$y;
$suma_total = array_reduce($numeros, $suma,0);
echo "<h1>Suma total $suma_total</h1>";
$resta = fn($x,$y)=>$x-$y;
$resta_total = array_reduce($numeros, $resta,0);
echo "<h1>Resta total $resta_total</h1>";
$multiplicacion = fn($x,$y)=>$x*$y;
$multiplicacion_total = array_reduce($numeros, $multiplicacion,1);
echo "<h1>Multiplicación total $multiplicacion_total</h1>";
$division = fn($x,$y)=>$x/$y;
$division_total = array_reduce($numeros, $division,1);
echo "<h1>División total $division_total</h1>";

//array_filter
$numeros =range(1,100);
$es_par = fn($x)=>$x%2==0;
$numeros_pares = array_filter($numeros, $es_par);
var_dump($numeros_pares);
$multiplos_5=fn($x)=>$x%5==0;
$numeros_multiplos_5 = array_filter($numeros, $multiplos_5);
var_dump($numeros_multiplos_5);
sort($numeros_multiplos_5);
var_dump($numeros_multiplos_5);

//array_walk
$numeros =range(0,100);
$cuadrado = fn(&$x)=>$x=$x*$x;
array_walk($numeros, $cuadrado);
var_dump($numeros);