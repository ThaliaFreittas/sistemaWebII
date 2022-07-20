<?php 
    class Governancia{
        private $nome;
        private $cpf;
        private $telefone;
        private $administra;

        public function __construct ($nome,$cpf,$telefone,$administra){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->administra=$administra;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getAdministra(){
            return $this->administra;
        }
        public function setNome($n){
            $this->nome=$n;
        }
        public function setCpf($c){
            $this->cpf=$c;
        }
        public function setTelefone($t){
            $this->telefone=$t;
        }
        public function setAdministra($a){
            $this->administra=$a;
        }
    }
?>