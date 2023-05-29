<?php



class Agenda extends Contacto
{

    private array $agenda = [];
    public function __construct(){}
//    {
//        var_dump($agenda);
//        $this->agenda=$agenda;


    public static function unserialize_agenda()
    {


        if (isset($_POST["agenda"]) && $_POST["agenda"] != "") {
            $aux = $_POST['agenda'];
            $aux2 = unserialize(base64_decode($aux));
            return $aux2;

        } else
            return new Agenda();
    }

    public static function serialize_agenda(Agenda $agenda)
    {
        if ($agenda->get_contactos() == 0)
            return null;
        else {
//            $safe_string_to_store = base64_encode(serialize($multidimensional_array));
            $agenda_serializada = base64_encode(serialize($agenda));
            return ($agenda_serializada);
        }
    }

    public function get_contactos(): int
    {
        return count($this->agenda);
    }

    public function realiza_accion(Contacto $contacto): string
    {
        if ($this->existe_contacto($contacto->get_nombre()))
            if ($contacto->get_telefono() == "")
                $mensaje = $this->borra_contacto($contacto->get_nombre());
            else
                $mensaje = $this->modifica_contacto($contacto);

        else
            $mensaje = $this->inserta_contacto($contacto);
        return $mensaje;
    }

    public function existe_contacto(string $nombre): bool
    {
        foreach ($this->agenda as $contacto)
            if ($contacto->get_nombre() == $nombre)
                return true;
        return false;
    }

    private function borra_contacto(string $nombre): string
    {
        foreach ($this->agenda as $key => $contacto)
            if ($contacto->get_nombre() == $nombre) {
                unset($this->agenda[$key]);
                return "Contacto borrado";
            }
        return "Contacto no borrado";
    }

    private function modifica_contacto(Contacto $contacto): string
    {
        foreach ($this->agenda as $key => $contacto_agenda)
            if ($contacto_agenda->get_nombre() == $contacto->get_nombre())
                $this->agenda[$key] = $contacto;
        return "Contacto modificado";
    }

    private function inserta_contacto(Contacto $contacto): string
    {
        $this->agenda[] = $contacto;
        return "Contacto insertado";
    }

    public function get_agenda(): array
    {
        return $this->agenda;
    }

    public function get_contacto(string $nombre): Contacto
    {
        foreach ($this->agenda as $contacto)
            if ($contacto->get_nombre() == $nombre)
                return $contacto;
        return new Contacto("", "");
    }


    public function eliminar_contactos(): void
    {
        $this->agenda = [];
    }
}