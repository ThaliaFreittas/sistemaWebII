<?php 
    class Recepcionista{
        private $nome;
        private $cpf;
        private $telefone;
        private $tarefa;

        public function __construct ($nome,$cpf,$telefone,$tarefa){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->tarefa=$tarefa;
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
        public function getTarefa(){
            return $this->tarefa;
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
        public function setTarefa($t){
            $this->tarefa=$t;
        }
    }
?>