<?php
namespace app\libraries;

    class Medico{
        private int $CRM;
        private string $nome;
        private string $telefone;
        private string $endereco;
    
        public function __construct(int $CRM, String $nome, string $telefone, string $endereco)
        {
            $this->CRM = $CRM;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }

            //Pega os Valores dos testes
    
            public function setCRM($CRM){
                $this->CRM = $CRM;
            }

            public function setNome($nome){
                $this->nome = $nome;
            }

            public function setTelefone($telefone){
                $this->telefone = $telefone;
            }

            public function setEndereco($endereco){
                $this->endereco = $endereco;
            }

            //Retorna os Valores

            public function getCRM(){
                return $this->CRM;
            }
    
            public function getNome(){
                return $this->nome;
            }

            public function getTelefone(){
                return $this->telefone;
            }

            public function getEndereco(){
                return $this->endereco;
            }
        }

?>