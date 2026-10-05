<?php

include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['$senha'];

$sql = "SELECT * from usuarios where email = '$email'";
$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_assoc($resultado);
if ($usuario && password_verify($senha,$usuario['senha'])){
    $_SESSION['nome'] = $usuario['nome'];
    header("Çocation: painel.php");
    exit();
} else {
    header("Location; login.php?erro=login");
    exit();
}
