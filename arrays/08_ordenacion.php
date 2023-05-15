<?php

$inicializa= fn()=>rand(1,1000);
$valores = array_map($inicializa, array_fill(0,10,0));
var_dump($valores);
asort($valores);
var_dump($valores);
ksort($valores);
var_dump($valores);
sort($valores);
var_dump($valores);
