<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset style="background:azure;width:50%;margin:10%">
    <legend>Datos Personales</legend>
    <form action="index.php" method="post">
        Nombre <input type="text" name="nombre" id=""><br/>
        Dirección <input type="text" name="direccion" id=""><br/>
        Fecha nacimiento <input type="date" name="fnac" id="">
        <hr/>
        Genero
        <br / >
        <input type="radio" name="hombre" id="">Hombre<br/>
        <input type="radio" name="mujer" id="">Mujer<br/>
        <input type="radio" name="otros" id="">Otro género <br/>
        Estudios
        <select name="estudios" id="">
            <option value="ESO">ESO</option>
            <option value="BACH">BACH</option>
            <option value="CICLO">CICLO</option>
        </select>
        <hr/>
        <input type="submit" value="Enviar">
    </form>

</fieldset>

</body>
</html>
