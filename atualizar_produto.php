<?php
include ("conexao.php");

$id = $_POST ["id"];
//$nroproduto = $_POST ['nroproduto']; não vai atualizar nesse caso, devido o número ser UNIVERSAL //
$nomeproduto = $_POST ['nomeproduto']; // O QUE ESTA DENTRO DO [] É REFERENTE AO NAME//
$categoria = $_POST ['categoria'];
$quantidade = $_POST ['quantidade'];
$fornecedor = $_POST ['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; margin-top: 16px;">
    <center>
        <h3>Atualizado com Sucesso !</h3>
        <div style="margin-top: 14px">
            <a href="listar_produtos.php" class="btn btn-warning btn-sm">Voltar</a>
        </div>
    </center>
</div>