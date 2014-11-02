<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




include_once 'model/Usuario.php';
include_once 'model/Imagem.php';
include_once 'model/Funcoes.php';

session_start();

//echo unserialize($_SESSION['usuario'])->getPcNome();


echo $_SESSION['teste'];

if (isset($_GET['user']))
    $lcUsername = $_GET['user'];

$usuario = Funcoes::getUsuariobyId(0, $lcUsername);

if ($usuario == FALSE) {
    header("Location: ./login.php");
} else {
    return $usuario;
}
?>
