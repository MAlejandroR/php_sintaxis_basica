<?php
namespace View;

use Dotenv;
use Controller\DataBase;

class Plantilla
{
    static public function html_tabla_usuarios(array $usuarios){
        $html = "<table style:'border solid 1px red'>";
        $html .= "<tr><th>Codigo</th><th>Nombre</th><th>Password</th></tr>";
        foreach ($usuarios as $usuario){
            $html .= "<tr>";
            $html .= "<td>{$usuario->getCodigo()}</td>";
            $html .= "<td>{$usuario->getNombre()}</td>";
            $html .= "<td>{$usuario->getPassword()}</td>";
            $html .= "</tr>";
        }
        return $html;
    }
    static function html_select_codigos($db, $codigo_actual=null){
        $db = new DataBase();
        $codigos = $db->get_codigos_nombres();
        $html = "<select onchange='actualiza(this.value)' name='usuario[codigo]'>\n";
        foreach ($codigos as $codigo=>$nombre){
            $selected = $codigo==$codigo_actual?"selected":"";
            $html .= "<option $selected value='{$codigo}'> {$nombre}</option>\n";
        }
        $html .= "</select>";
        return $html;
    }
    static function inicializa($dir){

        ini_set("display_errors", 1);
        error_reporting(E_ALL);

// bases_datos/acceso_basico_con_env.php
        require "./vendor/autoload.php";
        $carga = fn($clase)=>require("$clase.php");
        spl_autoload_register($carga);


//Primero especificamos la ubicación y nombre del fichero .env.
// En caso de llamarse de otra forma, lo especificaríamos
// __DIR__."otro_nombre"

        $dotenv = Dotenv\Dotenv::createImmutable($dir);
//Se puede usar la función safeload() para que no genere una excepción
//si no encuentra el fichero
        $dotenv->load();


    }
}