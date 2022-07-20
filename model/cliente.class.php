<?php 
    class Cliente{
        private $nome;
        private $idade;
        private $cpf;
        private $numero;
        private $quantPessoas;
        private $quantDias;
        private $tipo;

        public function __construct($nome, $idade, $cpf, $numero,$quantPessoas, $quantDias, $tipo){
            $this->nome=$nome;
            $this->idade=$idade;
            $this->cpf=$cpf;
            $this->numero=$numero;
            $this->quantPessoas=$quantPessoas;
            $this->quantDias=$quantDias;
            $this->tipo=$tipo;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function setNome($nome){
            $this->nome=$nome;
        }
        public function setIdade($idade){
            $this->idade=$idade;
        }
        public function setCpf($cpf){
            $this->cpf=$cpf;
        }
        public function setNumero($numero){
            $this->numero=$numero;
        }
        public function getQuantPessoas(){
            return $this->quantPessoas;
        }
        public function getQuantDias(){
            return $this->quantDias;
        }
        public function setQuantPessoas($p){
            $this->quantPessoas=$p;
        }
        public function setQuantDias($d){
            $this->quantDias=$d;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo=$tipo;
        }

        public function tipoQuarto(){
            if($_GET['tipo'] == 1){
                ($_GET['quantPessoas']*150)*$_GET['quantDias'];
            }elseif($_GET['tipo'] ==2){
                ($_GET['quantPessoas']*100)*$_GET['quantDias'];
            }elseif($_GET['tipo'] ==3){
                ($_GET['quantPessoas']*60)*$_GET['quantDias'];
            }else{
                ($_GET['quantPessoas']*60)*$_GET['quantDias'];;
            }
        }
    }   
?>    