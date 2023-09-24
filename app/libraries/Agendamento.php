<?php
namespace app\libraries;

class Agendamento
{
    private int $numeroAgendamento;
    private string $data;
    private string $hora;
    private string $queixa;
    private string $gravidade;

    public function __construct(int $numeroAgendamento, string $data, string $hora, string $queixa, string $gravidade)
    {
        $this->numeroAgendamento = $numeroAgendamento;
        $this->data = $data;
        $this->hora = $hora;
        $this->queixa = $queixa;
        $this->gravidade = $gravidade;
    }

    //Set
    public function setNumeroAgendamento($numeroAgendamento) { $this->numeroAgendamento = $numeroAgendamento; }

    public function setData($data) { $this->data = $data; }

    public function setHora($hora) { $this->hora = $hora; }

    public function setQueixa($queixa) { $this->queixa = $queixa; }

    public function setGravidade($gravidade) { $this->gravidade = $gravidade; }

    //Get
    public function getNumeroAgendamento() { return $this->numeroAgendamento; }

    public function getData() { return $this->data; }

    public function getHora() {  return $this->hora; }

    public function getQueixa() { return $this->queixa; }

    public function getGravidade() { return $this->gravidade; }
}
