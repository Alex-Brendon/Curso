<?php

include ('conexao.php');
include ('script/password.php');

$nome_usuario = $_POST['nomeusuario'];
$email_usuario = $_POST['emailusuario'];
$senha_usuario = $_POST['senhausuario'];
$nivel = $_POST['nivel'];
$status = 'Ativo';

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nome_usuario','$email_usuario', sha1('$senha_usuario'), $nivel, '$status')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 30px;">
    <center>
        <h4>Usuário Cadastrado com Sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="menu.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
            <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novamente</a>
        </center>
    </div>
</div>