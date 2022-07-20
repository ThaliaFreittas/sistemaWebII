<?php
  include "../model/garcom.class.php";
  include "../menu.php";
session_start();
?>
<?php
  if(isset($_SESSION['garcom'])){
      echo "<table class='table'>";
      echo "<tr><th>#</th><th>NOME</th><th>CPF</th><th>TELEFONE</th><th>ATENDE</th></tr>";
      foreach($_SESSION['garcom'] as $i=>$garcom){

        $cpf = $garcom->getCpf();
        $telefone = $garcom->getTelefone();
        $atende = $garcom->getAtende();
        $nome = $garcom->getNome();
        
     echo "<tr>
       <td>
       <div class='row'>
       <form action='#' method='GET'> 
       
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='telefone' value='$telefone'>
         <input type='hidden' name='atende' value='$atende'>


         <button type='submit' class='btn-primary'><i class='fa fa-eye'></i></button>
       </form>
       <form action='#' method='GET'>
         <input type='hidden' name='cod' value='$i'>
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='telefone' value='$telefone'>
         <input type='hidden' name='atende' value='$atende'>
    
         <button type='submit' class='btn-danger'>
         <i class='fa fa-trash'></i></button>
       </form>
       </div>
       </td>
       <td>$nome</td>
       <td>$cpf</td>
       <td>$telefone</td>
       <td>$atende</td>
       </tr>";
        }

      echo "</table>";
  }

?>