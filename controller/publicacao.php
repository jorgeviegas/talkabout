<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './model/Publicacao.php';
include_once './model/Imagem.php';
include_once './model/Funcoes.php';
include_once './model/DAO.php';


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['publi']))
    $lcPublicacao = $_GET['publi'];

$publicacao = Funcoes::getPublicacaoById($lcPublicacao);

if ($publicacao == FALSE) {
} else {
    return $publicacao;
}
?>
