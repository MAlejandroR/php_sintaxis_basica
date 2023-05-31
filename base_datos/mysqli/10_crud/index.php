<?php
//9_1_select
require "vendor/autoload.php";

use Controller\DataBase;
use Model\Usuario;
use View\Plantilla;

Plantilla::inicializa(__DIR__);


$accion = $_POST['submit']??"";
$db =new DataBase();

switch ($accion){
    case 'Insertar':
        $usuario = new Usuario($_POST['usuario']);
        $mensaje = $db->insert($usuario);
        break;
    case 'Actualizar':
        $usuario = new Usuario($_POST['usuario']);
        $mensaje = $db->update($usuario);
        break;
    case 'Borrar':
        $usuario = new Usuario($_POST['usuario']);
        $mensaje = $db->del($usuario);
        break;
    case 'Consultar':
        $usuarios = $db->get_all_users();
        var_dump($usuarios);
        $mensaje = sizeof ($usuarios)==0?"No hay usuarios en la tabla":html_tabla_usuarios($usuarios);
        break;
    default:
        $codigo = $_GET['codigo']??"";
        if ($codigo!=="") {
            $contacto = $db->get_user($codigo);
            $nombre = $contacto->getNombre();
            $password = $contacto->getPassword();
        }

        break;
}
$codigos = Plantilla::html_select_codigos($db, $codigo??null);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function actualiza(valor){
            window.location.href = "index.php?codigo="+valor;
            console.log ("valor: "+valor);
        }
    </script>
</head>
<body>
<fieldset>
    <legend>Datos de usuario</legend>
    <h1><?= $mensaje ?? "" ?></h1>
    <form action="index.php" method="post">
        Código del usuario a actualizar <?=$codigos ??""?><br>
        <h1>Nuevos datos de usuario </h1>
        Usuario <input type="text" name="usuario[nombre]" value= <?=$nombre ??""?>><br>
        Password <input type="text" name="usuario[password]" value= '<?=$password ??""?>' id=""><br>

        <input type="submit" value="Insertar" name="submit">
        <input type="submit" value="Actualizar" name="submit">
        <input type="submit" value="Borrar" name="submit">
        <input type="submit" value="Consultar" name="submit">
    </form>
</fieldset>
</body>
</html>
