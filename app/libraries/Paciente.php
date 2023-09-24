<?php
namespace app\libraries;

class Paciente
{
    private int $numeroBeneficiario;
    private string $nome;
    private string $endereco;
    private string $telefone;
    private string $doencasPrevias;
    private string $medioDeUsoContinuo;

    public function __construct(int $numeroBeneficiario, string $nome, string $endereco, string $telefone, string $doencasPrevias, string $medioDeUsoContinuo)
    {
        $this->numeroBeneficiario = $numeroBeneficiario;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->doencasPrevias = $doencasPrevias;
        $this->medioDeUsoContinuo = $medioDeUsoContinuo;
    }

    //Set
    public function setNumeroBeneficiario($numeroBeneficiario) { $this->numeroBeneficiario = $numeroBeneficiario; }

    public function setNome($nome) { $this->nome = $nome; }

    public function setEndereco($endereco) { $this->endereco = $endereco; }

    public function setTelefone($telefone) { $this->telefone = $telefone; }

    public function setDoencasPrevias($doencasPrevias) { $this->doencasPrevias = $doencasPrevias; }
    
    public function setMedioDeUsoContinuo($medioDeUsoContinuo) { $this->medioDeUsoContinuo = $medioDeUsoContinuo; }

    //Get
    public function getNumeroBeneficiario() { return $this->numeroBeneficiario; }

    public function getNome() { return $this->nome; }

    public function getEndereco() { return $this->endereco; }

    public function getTelefone() { return $this->telefone; }

    public function getDoencasPrevias() { return $this->doencasPrevias; }

    public function getMedioDeUsoContinuo() { return $this->medioDeUsoContinuo; }
}
