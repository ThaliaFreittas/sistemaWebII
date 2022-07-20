<?php
  include "../model/garcom.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['atende'])){
     $_SESSION['garcom'][]= new Garcom(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['atende']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conGarcom.php");
  }
?>