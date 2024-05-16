<?php
$tituloPagina = 'Editar Senha';

require_once $_SERVER['DOCUMENT_ROOT'] . '/defi/models/usuario.php';

if(!isset($_SESSION)){
    $_SESSION['aviso'] = "Você precisa estar logado";
    header('Location: /Souzx/views/login.php');
}
