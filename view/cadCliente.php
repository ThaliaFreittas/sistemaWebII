<?php
include "../model/cliente.class.php";
session_start(); 
?>
<body style= "background-color:rgb(45,45,45); justify-content:center; display:flex;">
<form style= "display: flex; flex-direction:column; width:20%; margin-top:6%; color: white; font-size:3vmin;"action="../controller/registrarCadCliente.php" method="GET">
    NOME:<input style= "margin-top:2%;" name="nome" value="<?php echo isset($_GET['nome'])?$_GET['nome']:''?>" type="text"><br>
    IDADE: <input style= "margin-top:2%;" type="number" min="18" name="idade" value="<?php echo isset($_GET['idade'])?$_GET['idade']:''?>" ><br>
    CPF:<input style= "margin-top:2%;" name="cpf" value="<?php echo isset($_GET['cpf'])?$_GET['cpf']:''?>" type="text"><br>
    NÚMERO: <input style= "margin-top:2%;" type="number" name= "numero" value="<?php echo isset($_GET['numero'])?$_GET['numero']:''?>"><br>
    Quantas pessoas são? <input style= "margin-top:2%;" name="quantPessoas" value="<?php echo isset($_GET['p'])?$_GET['p']:''?>" type="number" max="8"><br>
    Quantos dias vão ficar? <input style= "margin-top:2%;" type="number" min="3" max="30" name="quantDias" value="<?php echo isset($_GET['d'])?$_GET['d']:''?>" ><br>    
    <p>
    Qual combo vai querer?
            <select type="text" name="tipo">
                <option name="1">VIP</option><br>
                <option name="2">CONFORT</option><br>
                <option name="3">ECONOMICO</option><br>
                <option name="4">SOLO</option>
            </select>
    <br>              
    <button style= "width:40%; margin-top:2%; color: white; background-color:red;" type="submit">CADASTRAR</button>
    <button style= "width:40%; margin-top:2%; color: white; background-color:red;" type="reset">LIMPAR</button>
</form>
</body>