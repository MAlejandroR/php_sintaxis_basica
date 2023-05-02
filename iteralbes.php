<?php
function genera_notas():iterable{
    return  [1,3,45,5,6];
}
$notas = genera_notas();
foreach ($notas as $nota) {
    //...
}
