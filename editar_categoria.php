<?php

include ("conexao.php");

$id = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Edição</title>
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


<div class="container" id="tamanhocontainer" style=" margin-top: 40px;">
    <h4>Formulário de Edição</h4>
    <form action="atualizar_categoria.php" method="POST">
        <div class="form-group" style="margin-bottom: 10px; margin-top: 20px;">

        <?php

        $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)) {

            $id_categoria = $array['id_categoria'];
            $nome_categoria = $array['nome_categoria'];
            
        ?>

        <div class="form-group" style="margin-bottom: 10px";>
            <label>Nome da Categoria</label>
            <input type="text" class="form-control" name="nome_category" value="<?php echo $nomecategoria ?>">
            <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style= "display:none;">
        </div>

        <div style="margin-top: 5px; text-align: right;">
            <a href="listar_categorias.php" class="btn btn-primary btn-sm">Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
        </div>
        <?php } ?>
    </form>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>