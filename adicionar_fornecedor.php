<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        <h4>Cadastro de Fornecedor</h4>
        <form action="inserir_fornecedor.php" method="POST">
            <div class="form-group" style="margin-bottom: 10px; margin-top: 20px;">
                <label>Fornecedor</label>
                <input type="text" class="form-control" name="nome_fornecedor" placeholder="Digite o nome do Fornecedor" autocomplete="off">
            </div>
            <div style="text-align: right;">
            <a href="menu.php" type="submit" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>