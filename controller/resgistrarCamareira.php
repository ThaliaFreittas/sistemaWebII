<?php
  include "../model/camareira.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['funcao'])){
     $_SESSION['camareira'][]= new Camareira(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['funcao']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conCamareira.php");
  }
?>