<?php
  include "../model/cozinheiro.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['especialidade'])){
     $_SESSION['cozinheiro'][]= new Cozinheiro(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['especialidade']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conCozinheiro.php");
  }
?>