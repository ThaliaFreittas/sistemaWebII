<?php
  include "../model/governancia.class.php";
  include "../menu.php";
session_start();
?>
<?php
  if(isset($_SESSION['governancia'])){
      echo "<table class='table'>";
      echo "<tr><th>#</th><th>NOME</th><th>CPF</th><th>TELEFONE</th><th>ADMINISTRA</th></tr>";
      foreach($_SESSION['governancia'] as $i=>$governancia){

        $cpf = $governancia->getCpf();
        $telefone = $governancia->getTelefone();
        $administra = $governancia->getAdministra();
        $nome = $governancia->getNome();
        
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
