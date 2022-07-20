<?php 
    class Faxineiro{
        private $nome;
        private $cpf;
        private $telefone;
        private $local;

        public function __construct ($nome,$cpf,$telefone, $local){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->local=$local;
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
        public function getLocal(){
            return $this->local;
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
        public function setLocal($l){
            $this->local=$l;
        }
    }
?>