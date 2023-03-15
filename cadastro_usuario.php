<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style class="text/css">
        #tamanho {
            width: 350px;
            -webkit-box-shadow: 10px 10px 29px 0px rgba(196, 194, 196, 1);
            -moz-box-shadow: 10px 10px 29px 0px rgba(196, 194, 196, 1);
            box-shadow: 10px 10px 29px 0px rgba(196, 194, 196, 1);
        }
    </style>
</head>

<body>
    <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
        <h4>Cadastro de Usuário</h4>
        <form action="inserir_usuario.php" method="POST">
            <div class="mb-3">
                <label class="form-group">Nome Completo</label>
                <input type="text" name="nomeusuario" class="form-control" placeholder="Nome Completo" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label class="form-group">Email</label>
                <input type="email" name="emailusuario" class="form-control" placeholder="name@example.com" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label class="form-group">Senha</label>
                <input id="txtSenha" type="password" name="senhausuario" class="form-control" placeholder="Senha" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-group">Confirmar Senha</label>
                <input id="repetir_senha" type="password" name="senhausuario2" class="form-control" placeholder="Confirmar Senha" autocomplete="off" oninput="validaSenha(this)">
                <div class="form-text"></div>
            </div>
            <div class="mb-3">
                <label class="form-group">Nível de Acesso</label>
                <select name="nivelusuario" class="form-select">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </select>
            </div>
            <div class="mb-3" style="text-align: right;">
                <a class="btn btn-secondary" href="menu.php" role="button">Voltar</a>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- CONFIRMAR SE A SENHA REPETIDA ESTÁ CORRETA -->
    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }

        }
    </script>
</body>

</html>