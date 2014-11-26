<?php

include_once './model/Usuario.php';
include_once './model/Imagem.php';
include_once './model/Funcoes.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id_usuario'])) $lnIdUsuario = $_SESSION['id_usuario'];

$usuario = Funcoes::getUsuariobyId($lnIdUsuario,'');

if ($usuario == FALSE) {
} else {
    return $usuario;
}
?>
