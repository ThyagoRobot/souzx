<?php
$tituloPagina = 'Editar Perfil';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Souzx/models/usuario.php';

if(!isset($_SESSION)){
    $_SESSION['aviso'] = "Você precisa estar logado";
    header('Location: /Souzx/views/login.php');
}

try {
    $usuario = new Usuario($_SESSION['id_usuario']);
} catch (PDOException $e) {
    echo $e->getMessage();
}
