<?php
  include "../model/gerente.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['administra'])){
     $_SESSION['gerente'][]= new Gerente(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['administra']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conGerente.php");
  }
?>