<?php 
    include "../model/cliente.class.php";
    session_start();
    $c1 = new Cliente($_GET['nome'],$_GET['idade'],$_GET['cpf'],$_GET['numero'],$_GET['quantPessoas'],$_GET['quantDias'],$_GET['tipo']);
?>
<body style="display: flex; margin-top:15%; font-size:3.5vmin; justify-content:center;flex-wrap:wrap;">
    <?php 
    echo $c1->getNome()."<br>";
    echo $c1->getIdade()."<br>";
    echo $c1->getCpf()."<br>";
    echo $c1->getNumero()."<br>";
    echo $c1->getQuantPessoas()."<br>";
    echo $c1->getQuantDias()."<br>";
    echo $c1->getTipo()."<br>";
    ?>
</body>
<p>
<button style="display: flex; margin-top:180%">
        <a href="../index.php" style="color:red;">CONCLUIR</a></button>