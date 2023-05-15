<?php


function contenido (string $dir){
    $quita_puntos = function ($fichero) {
        return !str_contains($fichero, ".");
    };
    $ficheros = scandir("$dir");
    $ficheros = array_filter($ficheros, $quita_puntos);
    $practicas = "";
    foreach ($ficheros as $fichero)
        if (is_dir($fichero))
            $practicas .= "<a href='$fichero'>$fichero</a><Hr>";
    return $practicas;

}

$dir =".";
$practicas = contenido($dir);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
    <link rel="icon" href="favico.ico">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<fieldset >
    <legend>Listado de prácticas</legend>
    <?= "$practicas" ?>
</fieldset>
</body>
</html>
