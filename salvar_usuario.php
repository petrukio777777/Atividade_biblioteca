<?php

include("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlVerificar = "SELECT id FROM usuarios WHERE email = '$email'";
$resultadoVerificar = mysqli_query($conexao, $sqlVerificar);

if(mysqli_num_rows($resultadoVerificar) > 0){
    header("location: cadastro.php?erro=email");
    exit();
}

$senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhacriptografada')";

mysqli_query($conexao, $sql);

header("Location: login.php");
exit();