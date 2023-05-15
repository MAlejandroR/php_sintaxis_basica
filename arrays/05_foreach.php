<?php
$capitales =["España"=>"Madrid", "Italia"=>"Roma","Alemania"=>"Berlín"];


foreach ($capitales as $pais =>$capital){
    echo "La capital de<b>$pais </b> es <b>$capital</b><br />";
}
$inicializa=fn()=>rand(1,10);
$notas = array_map($inicializa, array_fill(0,10,0));
foreach ($notas as $nota){
    echo "Valor de nota $nota<br />";
}

foreach ($notas as $pos =>$nota){
    echo "Valor de nota $pos es $nota<br />";
}


