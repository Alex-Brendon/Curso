<?php

include ("conexao.php");

$nome_categoria = $_POST['nome_categoria'];

$sql = "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$nome_categoria')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 30px;">
    <center>
        <h4>Categoria Adicionada com Sucesso !</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar Nova Categoria</a>
        </center>
    </div>
</div>