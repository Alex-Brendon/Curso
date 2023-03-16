<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Produtos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/766dcb6c69.js" crossorigin="anonymous"></script>
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

  <div class="container" style="margin-top: 40px;">
    <h3>Lista de Produtos</h3>
    <br>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nro Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">

        <?php
        include('conexao.php');
        $sql = "SELECT * FROM `estoque`";
        $buscar = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($buscar)) {

          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];
        ?>

          <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $fornecedor ?></td>
            <td>
              <?php
              if (($nivel == 1)||($nivel == 2)) {
              ?>
              <a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>
              <?php } 
              if ($nivel ==1) {
              ?>
              <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash"></i></i>&nbsp;Deletar</a>
              <?php } ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <div style="text-align: right;">
      <a href="menu.php" type="submit" class="btn btn-sm btn-primary">Voltar</a>
    </div>
  </div>

  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>