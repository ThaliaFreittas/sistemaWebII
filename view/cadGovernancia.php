<?php
include "../model/governancia.class.php";
session_start(); 
?>
<body style= "background-color:rgb(45,45,45); justify-content:center; display:flex;">
<form style= "display: flex; flex-direction:column; width:20%; margin-top:10%; color: white; font-size:2.7vmin;"action="../controller/registrarGovernancia.php" method="GET">
    NOME:<input style= "margin-top:3%;" name="nome" value="<?php echo isset($_GET['n'])?$_GET['n']:''?>" type="text"><br>
    CPF:<input style= "margin-top:3%;" name="cpf" value="<?php echo isset($_GET['c'])?$_GET['c']:''?>" type="text"><br>
    TELEFONE: <input style= "margin-top:3%;" type="number" name= "telefone" value="<?php echo isset($_GET['t'])?$_GET['t']:''?>"><br>
    QUANTOS ANDARES ADMINISTRA: <input style= "margin-top:3%;" type="number" name= "administra" value="<?php echo isset($_GET['a'])?$_GET['a']:''?>"><br>
    <button style= "width:40%; margin-top:5%; color: white; background-color:red;" type="submit">CADASTRAR</button>
    <button style= "width:40%; margin-top:2%; color: white; background-color:red;" type="reset">LIMPAR</button>
</form>
</body>