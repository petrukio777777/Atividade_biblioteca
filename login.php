<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>biblioteca</h1>
        <p class="subtitulo">Faça login para caessar o sistema</p>
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'Login') {
            echo '<div class="mensagem-erro>Login invalido.
            Verifique Email e senha.</div>';
        }
        ?>
        <form action="autenticar.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="Email" id="email" name="email" placeholder="Digite seu Email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="senha" id="senha" name="senha" placeholder="Digite sua Senha" required>
            </div>
            <button type="submit" class="btn btn-block">Entrar</button>
        </form>
        <div class="nav-links">
              <p>Não tem conta? <a href="login.php">faça o Cadastro</a></p>
            </div>
            <a href="cadastro.php" class="btn btn-voltar"> voltar para Cadastro</a>
            <div class="dica-navegacao">
                <strong>Fluxo:</strong> Cadastro → login → Painel → Gerenciar Livros
            </div>
    </div>
</body>

</html>