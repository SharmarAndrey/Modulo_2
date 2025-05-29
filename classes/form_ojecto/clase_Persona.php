<?php

class Persona
{
    private $nombre;
    private $email;
    private $empleo;
    private $titulacion;
    private $comentario;


    public function __construct($nombre, $email, $empleo, $titulacion, $comentario)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->empleo = $empleo;
        $this->titulacion = $titulacion;
        $this->comentario = $comentario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmpleo()
    {
        return $this->empleo;
    }

    public function getTitulacion()
    {
        return $this->titulacion;
    }

    public function getComentario()
    {
        return $this->comentario;
    }
}
