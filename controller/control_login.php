<?php

include_once '../model/BancoDeDados.php';
include_once '../model/DAO.php';
include_once '../model/Funcoes.php';

if (isset($_POST['usuario'])) {
    $lcUsername = $_POST['usuario'];
}
if (isset($_POST['senha'])) {
    $lcSenha = $_POST['senha'];
}

$lcSenha = md5($lcSenha);
$lcFiltro = ' username = "' . $lcUsername . '" and senha ="' . $lcSenha . '"';

$llConexao = new BancoDeDados();
$llConexao->Conectar();

$usuariosDAO = new DAO(' usuarios ');
$retorno = $usuariosDAO->pesquisar(' * ', $lcFiltro);

if (mysql_num_rows($retorno) > 0) {
    $registro = mysql_fetch_array($retorno);
    session_start();
    $_SESSION['id_usuario'] = $registro['id'];
    $_SESSION['username'] = $registro['username'];
    header("Location: ../timeline.php");
    
} else {
    header("Location: ../login.php?erro=1");
}
?>
