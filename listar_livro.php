<?php

include("verificar_sessao.php");

include("conexao.php");

$sql = "SELECT * FROM livros";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar livros - biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container container-largo">
        <h1>Listagem de livros</h1>
        <p class="subtitulo">todos os livros cadastrados no sistema</p>
    </div>

    <table class="tabela-livros">
        <tr>
            <th>ID</th>
            <th>titulo</th>
            <th>autor</th>
            <th>status</th>
            <th>Ações</th>
        </tr>
    </table>

</body>

</html>