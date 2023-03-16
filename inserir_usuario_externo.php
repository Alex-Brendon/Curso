<?php

include ('conexao.php');
include ('script/password.php');

$nomeusuario = $_POST['nomeusuario'];
$emailusuario = $_POST['emailusuario'];
$senhausuario = $_POST['senhausuario'];
//$nivelusuario = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `status`) VALUES ('$nomeusuario','$emailusuario', sha1('$senhausuario'), '$status')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 30px;">
    <center>
        <h4>Usuário cadastrado com sucesso, espere a confirmação!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="menu.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
            <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novamente</a>
        </center>
    </div>
</div>