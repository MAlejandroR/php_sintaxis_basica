<?php
// Path: arrays/01_indices.php
$array[0] = "valor de posición 0";
$array[1] = "valor de posición 1";
var_dump($array);
$array[true] = "valor de posición true que será 1";
var_dump($array);
$array["1"] = "valor de posición \"1\" que será 1 ";
var_dump($array);
$array[1.5] = "valor de posición 1 sustituyendo al anterior";
var_dump($array);
$array["   1"] = "valor de posición 1";
var_dump($array);
/*

 $array[[1]=>"error"]]; //Error ya que el índice no puede ser un array
 var_dump($array);
*/


?>
