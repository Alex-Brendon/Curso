<?php

include ("conexao.php");

$id = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#tamanhocontainer{
			width: 500px;
		}

		#botao{
			background: #FF0051;
			color: #ffffff;
		}
	</style>
</head>
<body>
<?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}
?>

<div class="container" id="tamanhocontainer" style=" margin-top: 40px;">
    <h4>Formulário de Cadastro</h4>
    <form action="atualizar_produto.php" method="POST">
        <div class="form-group" style="margin-bottom: 10px; margin-top: 20px;">

        <?php

        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)) {

            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

        ?>
            <label>Nro do Produto</label>
            <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
        </div>

        <div class="form-group" style="margin-bottom: 10px";>
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
        </div>

        <div class="form-group" style="margin-bottom: 10px";>
            <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Hadware</option>
                    <option>Periféricos</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
        </div>

        <div class="form-group" style="margin-bottom: 10px;">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
        </div>

        <div class="form-group" style="margin-bottom: 10px;">
            <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
        </div>

        <div style="margin-top: 5px; text-align: right;">
            <a href="listar_produtos.php" class="btn btn-primary btn-sm">Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
        </div>
        <?php } ?>
    </form>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>