<?php

namespace app\libraries;

class Paciente{
        private int $numeroBeneficiario;
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $doencasPrevias;
        private string $medioDeUsoContinuo;
    
        public function __construct(int $numeroBeneficiario, String $nome, String $endereco, String $telefone, String $doencasPrevias, String $medioDeUsoContinuo)
        {
            $this->numeroBeneficiario = $numeroBeneficiario;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->doencasPrevias = $doencasPrevias;
            $this->medioDeUsoContinuo = $medioDeUsoContinuo;
        }
    
        //Pega os Valores dos testes

        public function setNumeroBeneficiario(){
            $this->numeroBeneficiario = $numeroBeneficiario;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function setDoencasPrevias($doencasPrevias){
            $this->doencasPrevias = $doencasPrevias;
        }

        public function setMedioDeUsoContinuo($medioDeUsoContinuo){
            $this->medioDeUsoContinuo = $medioDeUsoContinuo;
        }

        //Retorna os Valores

        public function setNumeroBeneficiario(){
            return $this->numeroBeneficiario;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function getTelefone(){
            return $this->telefone;
        }
        
        public function setDoencasPrevias(){
            return $this->doencasPrevias;
        }

        public function setMedioDeUsoContinuo(){
            return $this->medioDeUsoContinuo;
        }
    }

?>