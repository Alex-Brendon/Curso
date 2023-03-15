<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Categorias</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/766dcb6c69.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container" style="margin-top: 40px; width: 550px;">
    <h3>Lista de Categorias</h3>
    <br>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome Categoria</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">

        <?php
        include('conexao.php');
        $sql = "SELECT * FROM `categoria`";
        $buscar = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($buscar)) {

          $id_categoria = $array['id_categoria'];
          $nome_categoria = $array['nome_categoria'];
        ?>

          <tr>
            <td><?php echo $nome_categoria ?></td>

            <td>
              <a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a>
              <a class="btn btn-danger btn-sm" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-trash"></i></i>&nbsp;Deletar</a>
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