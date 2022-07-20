<?php
  include "../model/cliente.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['idade']) and isset($_GET['cpf'])and isset($_GET['numero'])and isset($_GET['quantPessoas'])and isset($_GET['quantDias'])and isset($_GET['tipo'])){
     $_SESSION['cliente'][]= new Cliente(
          $_GET['nome'],$_GET['idade'],$_GET['cpf'],$_GET['numero'],$_GET['quantPessoas'],$_GET['quantDias'],$_GET['tipo']);
     echo "<h1>VOCÊ FOI CADASTRADO E AGENDOU SUA RESERVA!</h1>";
          header("Refresh:2;../view/consultarClien.php");
  }
?>