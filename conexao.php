<?php

$conexao = mysqli_connect(
    "localhost",
    "root",
    "root",
    "biblioteca"

);

if (!$conexao) {
    die("erro na conexão: " . mysqli_connect_error());
}