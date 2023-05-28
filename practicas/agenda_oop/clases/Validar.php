<?php


class Validar
{

    public static array $errores = [];

    public static function valida_datos(Contacto $contacto, Agenda $agenda): bool
    {
        $nombre= $contacto->get_nombre();
        $telefono= $contacto->get_telefono();
        $valido = true;
        $valido = self::valida_nombre($nombre)&& $valido;
        $valido = self::valida_telefono($telefono)&& $valido;
        $valido = self::valida_existencia_nombre_en_agenda($nombre, $telefono, $agenda)&&$valido;
        return $valido;
    }

    private static function valida_nombre(string $nombre): bool
    {
        if ($nombre === "") {
            self::$errores[] = "El nombre no puede estar vacío";
            return false;
        }
        return true;
    }

    private static function valida_telefono(string $telefono):bool
    {
        if (($telefono!=="")&&(!is_numeric($telefono))) {
            self::$errores[] = "El teléfono tiene que ser numérico ";
            return false;
        }
        return true;
    }

    private static function valida_existencia_nombre_en_agenda(string $nombre, string $telefono, Agenda $agenda):bool
    {
        if ($telefono=="")
           if (!$agenda->existe_contacto($nombre)) {
                self::$errores[] = "El nombre $nombre no existe y no se puede borrar";
                return false;
                }
        return true;
    }
    public static function get_errores():string
    {
        $errores="";
        foreach (self::$errores as $error)
            $errores.=$error."<br>";
        return $errores;
    }

}