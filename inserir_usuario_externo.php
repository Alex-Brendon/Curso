<?php

include ('conexao.php');
include ('script/password.php');

$nomeusuario = $_POST['nomeusuario'];
$emailusuario = $_POST['emailusuario'];
$senhausuario = $_POST['senhausuario'];
$status = 'INATIVO';

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `status`) VALUES ('$nomeusuario','$emailusuario', sha1('$senhausuario')', '$status')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 30px;">
    <center>
        <h4>Usuário cadastrado com sucesso, esperando aprovação!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="index.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
            <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novamente</a>
        </center>
    </div>
</div>