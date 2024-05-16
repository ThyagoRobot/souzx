<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Souzx/models/usuario.php';

try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;
    

    $usuario->criar();

    header('Location: /Souzx/views/login.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}