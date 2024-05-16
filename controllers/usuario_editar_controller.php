<?php

session_start();
if(!isset($_SESSION['id_usuario'])){
    header('Location: /Souzx/views/login.php');
}


require_once $_SERVER['DOCUMENT_ROOT'] . '/Souzx/models/usuario.php';

try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(!empty($_FILES['foto']['tmp_name'])){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $usuario = new Usuario($id);
    $usuario->nome = $nome;
    $usuario->email = $email;
    

    $usuario->atualizar();

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

    header('Location: /Souzx/views/perfil.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}