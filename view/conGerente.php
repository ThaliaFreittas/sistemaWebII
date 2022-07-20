<?php
  include "../model/gerente.class.php";
  include "../menu.php";
session_start();
?>
<?php
  if(isset($_SESSION['gerente'])){
      echo "<table class='table'>";
      echo "<tr><th>#</th><th>NOME</th><th>CPF</th><th>TELEFONE</th><th>ADMINISTRA</th></tr>";
      foreach($_SESSION['gerente'] as $i=>$gerente){

        $cpf = $gerente->getCpf();
        $telefone = $gerente->getTelefone();
        $administra = $gerente->getAdministra();
        $nome = $gerente->getNome();
        
     echo "<tr>
       <td>
       <div class='row'>
       <form action='#' method='GET'> 
       
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='telefone' value='$telefone'>
         <input type='hidden' name='administra' value='$administra'>


         <button type='submit' class='btn-primary'><i class='fa fa-eye'></i></button>
       </form>
       <form action='#' method='GET'>
         <input type='hidden' name='cod' value='$i'>
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='telefone' value='$telefone'>
         <input type='hidden' name='administra' value='$administra'>
    
         <button type='submit' class='btn-danger'>
         <i class='fa fa-trash'></i></button>
       </form>
       </div>
       </td>
       <td>$nome</td>
       <td>$cpf</td>
       <td>$telefone</td>
       <td>$administra</td>
       </tr>";
        }

      echo "</table>";
  }

?>
