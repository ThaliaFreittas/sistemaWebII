<?php 
    class Garcom{
        private $nome;
        private $cpf;
        private $telefone;
        private $atende;

        public function __construct ($nome,$cpf,$telefone,$atende){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->atende=$atende;
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
        public function getAtende(){
            return $this->atende;
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
        public function setAtende($a){
            $this->atende=$a;
        }
    }
?>