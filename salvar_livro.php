<?php

include("verificar_sessao.php");

include("conexao.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];

$sql = "INSERT INTO livros (titulo, autor, status) 
VALUES ('$titulo', '$autor', '$status')";

mysqli_query($conexao, $sql);

header("Location: listar_livro.php");
exit();
