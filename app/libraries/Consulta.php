<?php

namespace app\libraries;

class Consulta
{
    private int $numeroConsulta;
    private string $data;
    private string $hora;

    public function __construct(int $numeroConsulta, string $data, string $hora){
        $this->numeroConsulta = $numeroConsulta;
        $this->data = $data;
        $this->hora = $hora;
    }

    //Set
    public function setNumeroConsulta($numeroConsulta) { $this->numeroConsulta = $numeroConsulta; }

    public function setData($data) { $this->data = $data; }

    public function setHora($hora) { $this->hora = $hora; }

    //Get
    public function getNumeroConsulta() { return $this->numeroConsulta; }

    public function getData() { return $this->data; }

    public function getHora() { return $this->hora; }
}
