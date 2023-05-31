<?php

namespace Model;
class Usuario
{
    private string $nombre;
    private string $password;
    private int|null $codigo;

    public function __construct(array $datos)
    {

        $this->nombre = $datos['nombre'] ?? null;
        $this->password = $datos['password'] ?? null;
        $this->codigo = $datos['codigo'] ?? null;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int|null
     */
    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    /**
     * @param int|null $codigo
     */
    public function setCodigo(?int $codigo): void
    {
        $this->codigo = $codigo;
    }

}