<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$ carga = fn ($clase) => require("clases/$clase.php");
spl_autoload_register($carga);

//inicializo variables
$contactos = 0;
$opcion = $_POST['submit']??"";
$agenda = Agenda::unserialize_agenda();

switch ($opcion){
    case "Actualizar agenda":
        //Recogemos los datos del formulario
        $nombre = trim($_POST['nombre'])??"";
        $telefono = trim($_POST['telefono'])??"";
        //TODO
        //Ver opciòn de refactorizar ...
        //Validamos los datos
        $contacto = new Contacto($nombre,$telefono);
        //En función de errores o no, añadimos el contacto
        //Actualizamos el mensaje con los errores o la acción realizada
        if (Validar::valida_datos($contacto, $agenda))
            $mensaje=$agenda->realiza_accion($contacto);
        else
            $mensaje = Validar::get_errores();

        //Obtenemos los datos para el formulario
        $contactos = $agenda->get_contactos();
        $tabla_contactos=Plantilla::get_tabla_contactos($agenda);
        break;
    case "Eliminar contactos":

        $agenda->eliminar_contactos();
    default:
        $contactos =0;
}
$agenda = Agenda::serialize_agenda($agenda);
$enable_borrar_contactos= $contactos>0?"enabled":"disabled";

?>


<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <script src='https://unpkg.com/vue'></script>
    <title> Agenda de contactos</title>
</head>
<header>
    Agenda de contactos: <?=$contactos??"sin contactos actualmente"?></header>
<body>

<div class="listado_contactos">
    <div class="center">LISTADO DE CONTACTOS</div>
    <hr>
    <div class="center">
        <?=$tabla_contactos??"Agenda sin contactos"?>    </div>
</div>
<!-- Creamos el formulario para insertr los nuevos datos-->
<fieldset>
    <legend>Nuevo Contacto</legend>
    <?=$mensaje ??""?>
    <form action=index.php method="post">
        <br>
        <label for="nombre">Nombre</label><input type="text" name="nombre" size="15"/><br/>
        <label for="telefono">Teléfono </label><input type="text" name="telefono" size="15"/><br/>
        <input type="submit" value="Actualizar agenda" name="submit">
        <input type="submit" value="Eliminar contactos" name="submit" <?=$enable_borrar_contactos?> >

    <input type="hidden" name="agenda" value='<?=$agenda?>'/>

    </form>

</fieldset>
<div style="clear:both ">
    <hr/>
</div>

</body>

</html>
