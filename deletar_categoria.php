<?php 

include ("conexao.php");

$id = $_GET ['id'];

$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; margin-top: 16px;">
    <center>
        <h3>Deletado com Sucesso !</h3>
        <div style="margin-top: 14px">
            <a href="listar_categorias.php" class="btn btn-danger btn-sm">Voltar</a>
        </div>
    </center>
</div>