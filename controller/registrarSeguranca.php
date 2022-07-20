<?php
  include "../model/seguranca.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['local'])){
     $_SESSION['seguranca'][]= new Seguranca(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['local']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conSegunca.php");
  }
?>