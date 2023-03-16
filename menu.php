<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

include ("conexao.php");

$sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$usuario' AND status = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];
?>
<div style="text-align: right; margin-top:15px; margin-right: 15px">
  <a href="index.php" type="submit" class="btn btn-danger">Sair</a>
</div>

<div class= "container" style="margin-top: 100px;">

<div class="row">
<?php

if (($nivel == 1)||($nivel == 2)) {
?>

  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produtos</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produtos</a>
      </div>
    </div>
  </div>
<?php } ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos e Categorias</h5>
        <p class="card-text">Visualizar, editar e excluir os produtos e categorias.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
        <a href="listar_categorias.php" class="btn btn-primary">Categorias</a>
      </div>
    </div>
  </div>
</div>

</div>
<div class="container" style="margin-top: 10px;">

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Opção para adicionar categorias em nosso estoque.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categorias</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Fornecedores</h5>
        <p class="card-text">Opção para adicionar categorias em nosso estoque.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style="margin-top: 10px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Cadastro de usuários.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
</div>

  <div class="col-sm-6" style="margin-top: 10px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>