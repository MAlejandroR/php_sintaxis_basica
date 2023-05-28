<?php


//Cargamos el contenido de un fichero en una variable
$contenido = file_get_contents("./tv.json");

//Convertirmo el json en un array asociativo
$array_tv = (array)json_decode($contenido, true);
$html="<table>";
foreach ($array_tv as $cadenas) {
    $html .= "<tr><th colspan='4'> {$cadenas['name']}</th></tr>";
    $canales = $cadenas['channels'];
    $html .= "<tr>";
    foreach ($canales as $pos=>$canal) {
        $html .="<td>";
        $html .= "{$canal['name']}";
        $html .="<a href={$canal['web']}><img src='{$canal['logo']}' alt='{$canal['name']}' /></a>";
        if (($pos+1) %4==0)
            $html .="</tr><tr>";
        
    }
}
$html.="</table>";
    ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?="$html"?>
</body>
</html>