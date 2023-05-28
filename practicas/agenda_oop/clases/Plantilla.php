<?php


use Contacto;

class Plantilla extends Contacto
{
    public static function get_tabla_contactos(Agenda $agenda){
        $html="<table>";
        $lista_contactos =$agenda->get_agenda();
        $html.="<tr><th>Nombre</th><th>Teléfono</th>";
        foreach ($lista_contactos as $contacto) {
            $html .= "<tr>";
            $html .= "<td>" . $contacto->get_nombre() . "</td>";
            $html .= "<td>" . $contacto->get_telefono() . "</td>";
            $html .= "</tr>";
        }
        $html.="</table>";
        return $html;
    }

}