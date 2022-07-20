<?php 
    class Mordomo{
        private $nome;
        private $cpf;
        private $telefone;
        private $turno;

        public function __construct ($nome,$cpf,$telefone,$turno){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->turno=$turno;
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
        public function getTurno(){
            return $this->turno;
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
        public function setTurno($t){
            $this->turno=$t;
        }
    }
?>