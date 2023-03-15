<?php

$servername = "localhost"; // padrão - server local //
$database = "curso_estoque"; // alterar conforme o nome do seu banco de dados //
$username = "root"; // padrão - root //
$passoword = ""; // senha de conexão do bancos de dados //

// create connection //
$conexao = mysqli_connect($servername, $username, $passoword, $database);
if ($conexao -> connect_errno) {
	echo "Falha ao conectar: (" . $conexao -> connect_errno .") " . $conexao -> connect_error;
}
