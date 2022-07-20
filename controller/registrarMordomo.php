<?php
  include "../model/modormo.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['turno'])){
     $_SESSION['mordomo'][]= new Mordomo(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['turno']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conMordomo.php");
  }
?>