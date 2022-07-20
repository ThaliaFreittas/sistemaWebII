<?php 
    class Batender{
        private $nome;
        private $cpf;
        private $telefone;
        private $especialidade;

        public function __construct ($nome,$cpf,$telefone, $especialidade){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->especialidade=$especialidade;
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
        public function getEspecialidade(){
            return $this->especialidade;
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
        public function setEspecialidade($e){
            $this->especalidade=$e;
        }
    }
?>