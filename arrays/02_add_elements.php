<?php
//arrays/02_add_elements.php
$notas =[]; //Creo un array vacío

//Add elementos indicando el índice
$notas["Juan"]=5;
var_dump($notas);

//Add elemento sin indicar el índice
$notas[]= 6;
$notas[]= 7;
$notas[]= 9;
var_dump($notas);
//También puedo añadir un elemento array
$notas["María"]=["programacion"=>9,"bd"=>5] ;

//Un elemento
var_dump($notas);
$notas+=["Pedro"=>6,"Ana"=>7,"Rosa"=>9];
// $notas = $notas + ["Pedro"=>6,....];


// Es lo mismo que $notas=array_merge($notas,["Pedro"=>6,"Ana"=>7,"Rosa"=>9]);
var_dump($notas);

