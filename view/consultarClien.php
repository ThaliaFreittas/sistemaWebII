<?php
include "../model/cliente.class.php";
include "../menu.php";
session_start();
?>
<?php
  if(isset($_SESSION['cliente'])){
      echo "<table class='table'>";
      echo "<tr><th>#</th><th>NOME</th><th>CPF</th><th>IDADE</th><th>NUMERO</th><th>QUANTIDADE DE PESSOAS</th><th>QUANTIDADE DIAS</th><th>COMBO</th></tr>";
      foreach($_SESSION['cliente'] as $i=>$cliente){

        $cpf = $cliente->getCpf();
        $nome = $cliente->getNome();
        $idade = $cliente->getIdade();
        $numero = $cliente->getNumero();
        $quantPessoas = $cliente->getNome();
        $quantDias = $cliente->getQuantDias();
        $tipo = $cliente->getTipo();


     echo "<tr>
       <td>
       <div class='row'>
       <form action='#' method='GET'> 
       
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='idade' value='$idade'>
         <input type='hidden' name='numero' value='$numero'>
         <input type='hidden' name='quantPessoas' value='$quantPessoas'>
         <input type='hidden' name='quantDias' value='$quantDias'>
         <input type='hidden' name='tipo' value='$tipo'>

         <button type='submit' class='btn-primary'><i class='fa fa-eye'></i></button>
       </form>
       <form action='#' method='GET'>
         <input type='hidden' name='cod' value='$i'>
         <input type='hidden' name='nome' value='$nome'>
         <input type='hidden' name='cpf' value='$cpf'>
         <input type='hidden' name='idade' value='$idade'>
         <input type='hidden' name='numero' value='$numero'>
         <input type='hidden' name='quantPessoas' value='$quantPessoas'>
         <input type='hidden' name='quantDias' value='$quantDias'>
         <input type='hidden' name='tipo' value='$tipo'>
         <button type='submit' class='btn-danger'>
         <i class='fa fa-trash'></i></button>
       </form>
       </div>
       </td>
       <td>$nome</td>
       <td>$cpf</td>
       <td>$idade</td>
       <td>$numero</td>
       <td>$quantPessoas</td>
       <td>$quantDias</td>
       <td>$tipo</td>

       </tr>";
        }

      echo "</table>";
  }

?>
