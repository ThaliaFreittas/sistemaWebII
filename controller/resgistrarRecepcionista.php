<?php
  include "../model/recepcionista.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['tarefa'])){
     $_SESSION['recepcionista'][]= new Recepcionista(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['tarefa']);
     echo "<h1>VOCÊ FOI CADASTRADO</h1>";
          header("Refresh:2;../view/conRecepcionista.php");
  }
?>