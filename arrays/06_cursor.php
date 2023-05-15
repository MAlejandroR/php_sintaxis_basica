<?php
$inicializa = fn()=>rand(1,10);
$notas = array_map($inicializa, array_fill(0,10,0));

var_dump($notas);
$nota = current($notas);
while ($nota !=null){
    echo "<h1>Valor de nota $nota</h1>";
    $nota = next($notas);
    }




