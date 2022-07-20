<?php 
    class Camareira{
        private $nome;
        private $cpf;
        private $telefone;
        private $funcao;

        public function __construct ($nome,$cpf,$telefone, $funcao){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->funcao=$funcao;
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
        public function getFuncao(){
            return $this->funcao;
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
        public function setFuncao($f){
            $this->funcao=$f;
        }
    }
?>