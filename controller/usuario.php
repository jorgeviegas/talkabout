<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './model/Usuario.php';
include_once './model/Imagem.php';
include_once './model/Funcoes.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['user']))
    $lcUsername = $_GET['user'];

$usuario = Funcoes::getUsuariobyId(0, $lcUsername);

if ($usuario == FALSE) {
} else {
    return $usuario;
}
?>
