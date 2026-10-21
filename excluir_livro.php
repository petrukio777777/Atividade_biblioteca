<?php

include("verificar_sessao.php");

include("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id = $id";

mysqli_query($conexao, $sql);

header("Location: listar_livro.php");
exit();