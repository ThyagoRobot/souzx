<?php

session_start();
if(!isset($_SESSION['id_usuario'])){
    header('Location: /Souzx/views/login.php');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/Souzx/models/usuario.php';


try {
    $senha = $_POST['senha'];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $usuario = new Usuario($_SESSION['id_usuario']);
    $usuario->senha = $senha;
    

    $usuario->atualizarSenha();

    header('Location: /Souzx/views/perfil.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}