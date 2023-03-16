<?php

include ("conexao.php");

$id = $_GET['id'];
$deletar = "DELETE FROM usuarios WHERE id_usuarios = $id";
$fila = mysqli_query($conexao, $deletar);

header("Location: aprovar_usuario.php");//Redireciona novamente para a página de aprovação

?>