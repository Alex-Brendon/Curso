<?php

include ("conexao.php");

$nome_fornecedor = $_POST['nome_fornecedor'];

$sql = "INSERT INTO `fornecedor` (`nome_fornecedor`) VALUES ('$nome_fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 30px;">
    <center>
        <h4>Fornecedor Adicionado com Sucesso !</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novo Fornecedor</a>
        </center>
    </div>
</div>