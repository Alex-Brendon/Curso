<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhocontainer {
            width: 500px;
        }

        #botao {
            background: #FF0051;
            color: #ffffff;
        }
    </style>
</head>

<body>


    <div class="container" id="tamanhocontainer" style=" margin-top: 40px;">
        <h4>Formulário de Cadastro</h4>
        <form action="inserir_produto.php" method="POST">
            <div class="form-group" style="margin-bottom: 10px; margin-top: 20px;">
                <label>Nro do Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>

            <div class="form-group" style="margin-bottom: 10px" ;>
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>

            <div class="form-group" style="margin-bottom: 10px" ;>
                <label>Categoria</label>
                <select class="form-select" name="categoria">

                    <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM `categoria` order by nome_categoria ASC"; // O NOME "CATEGORIA" DENTRO DO PHP SE REFERE AO NOME DO BANCO DE DADOS //
                        $buscar = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($buscar)) {

                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];
          
                    ?>
                    <option><?php echo $nome_categoria ?></option>

                    <?php } ?>

                </select>
            </div>

            <div class="form-group" style="margin-bottom: 10px;">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>

            <div class="form-group" style="margin-bottom: 10px;">
                <label>Fornecedor</label>
                <select class="form-select" name="fornecedor">

                    <?php
                        include('conexao.php');
                        $sql = "SELECT * FROM `fornecedor` order by nome_fornecedor ASC"; // O NOME "FORNECEDOR" DENTRO DO PHP SE REFERE AO NOME DO BANCO DE DADOS //
                        $buscar = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($buscar)) {

                        $id_fornecedor = $array['id_fornecedor'];
                        $nome_fornecedor = $array['nome_fornecedor'];
          
                    ?>
                    <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>

                </select>
            </div>

            <div style="margin-top: 5px; text-align: right;">
                <a href="menu.php" type="submit" class="btn btn-sm btn-primary">Voltar</a>
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>