<?php
$idioma = $_COOKIE['idioma'] ?? "es";

setcookie("idioma", $idioma, time()+3600*24*365);




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>

<form action="index.php" method="post">
    <input type="radio" name="idioma" value ='es' id="">Español<br/>
    <input type="radio" name="idioma" value ='fr' id="">Francés<br/>
    <input type="radio" name="idioma" value ='en' id="">Inglés<br/>
    <input type="submit" value="Establecer" name="submit">
</body>
</html>