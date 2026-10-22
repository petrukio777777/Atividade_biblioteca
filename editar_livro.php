<?php

include("verificar_sessao.php");

include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

$livro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro-biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Editar livro</h1>
        <p class="subtitulo">
            altere os dados do livro e clique em atualizar.
        </p>

        <form action="atualizar_livro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

            <dvi class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $livro['titulo']; ?>" required>
            </dvi>
            <dvi class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" value="<?php echo $livro['autor']; ?>" required>
            </dvi>
            <dvi class="form-group">
                <label for="status">status</label>
                <select name="status" id="status" required>
                    <option value="Disponivel" <?php if ($livro['status'] === 'disponivel') echo 'selected'; ?>>Disponivel</option>
                    <option value="Emprestado" <?php if ($livro['status'] === 'emprestado') echo 'selected'; ?>>Emprestado</option>
                </select>
            </dvi>
            <button type="submit" class="btn btn-block">Atulizar Livro</button>
        </form>
        <a href="listar_livro.ph" class="btn btn-voltar">
            Voltar para a Listagem
        </a>
    </div>
</body>

</html>