<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        #tamanho{
            width: 350px;
            -webkit-box-shadow: 10px 10px 29px 0px rgba(196,194,196,1);
            -moz-box-shadow: 10px 10px 29px 0px rgba(196,194,196,1);
            box-shadow: 10px 10px 29px 0px rgba(196,194,196,1);
        }
    </style>
</head>
<body>
    <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
    <div style="padding: 10px">
    <center>
        <img src="img/Cadeado.png" alt="Cadeado.png" width="125px;" height="125px;">
    </center>
    <form>
        <div class="mb-3">
            <label for="usuario" class="form-group">Usuário</label>
            <input type="email" class="form-control" placeholder="Usuário" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-group">Senha</label>
            <input type="password" class="form-control" placeholder="Senha" autocomplete="off" required>
        </div>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-success">Entrar</button>
        </div>
    </form>
    </div>
    </div>

    <div style="margin-top: 10px;">
    <center> 
        <small>Você não possui cadastro? <a href="cadastro_usuario_externo.php">Clique aqui</a></small>
    </center>
    </div>

   
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>