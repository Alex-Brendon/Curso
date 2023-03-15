<?php
include ("conexao.php");

$id = $_POST ["id"];
//$nroproduto = $_POST ['nroproduto']; não vai atualizar nesse caso, devido o número ser UNIVERSAL //
$nome_categoria = $_POST ['nome_categoria']; // O QUE ESTA DENTRO DO [] É REFERENTE AO NAME//

$sql = "UPDATE `categoria` SET `nome_categoria`='$nome_categoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; margin-top: 16px;">
    <center>
        <h3>Atualizado com Sucesso !</h3>
        <div style="margin-top: 14px">
            <a href="listar_categorias.php" class="btn btn-warning btn-sm">Voltar</a>
        </div>
    </center>
</div>