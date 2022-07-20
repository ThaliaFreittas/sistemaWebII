<?php
  include "../model/mensageiro.class.php";
  include "../menu.php";
session_start();
?>
<?php
  if(isset($_SESSION['mensageiro'])){
      echo "<table class='table'>";
      echo "<tr><th>#</th><th>NOME</th><th>CPF</th><th>TELEFONE</th><th>TURNO</th></tr>";
      foreach($_SESSION['mensageiro'] as $i=>$mensageiro){

        $cpf = $mensageiro->getCpf();
        $telefone = $mensageiro->getTelefone();
        $turno = $mensageiro->getTurno();
        $nome = $mensageiro->getNome();
        
     echo "<tr>
       <td>
       <div class='row'>
       <form action='#' method='GET'> 
       
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='telefone' value='$telefone'>
         <input type='hidden' name='turno' value='$turno'>


         <button type='submit' class='btn-primary'><i class='fa fa-eye'></i></button>
       </form>
       <form action='#' method='GET'>
         <input type='hidden' name='cod' value='$i'>
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='telefone' value='$telefone'>
         <input type='hidden' name='turno' value='$turno'>
    
         <button type='submit' class='btn-danger'>
         <i class='fa fa-trash'></i></button>
       </form>
       </div>
       </td>
       <td>$nome</td>
       <td>$cpf</td>
       <td>$telefone</td>
       <td>$turno</td>
       </tr>";
        }

      echo "</table>";
  }

?>
