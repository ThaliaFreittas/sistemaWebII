<?php
  include "../model/faxineiro.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['local'])){
     $_SESSION['faxineiro'][]= new Faxineiro(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['local']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conFaxineiro.php");
  }
?>