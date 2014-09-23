<?php

include '../model/BancoDeDados.php';
include '../model/DAO.php';

if (isset($_POST['username']))
    $lcUsername = $_POST['username'];
if (isset($_POST['senha']))
    $lcSenha = $_POST['senha'];

$lcSenha = md5($lcSenha);
$lcFiltro = ' username = "' . $lcUsername . '" and senha ="' . $lcSenha . '"';

$llConexao = new BancoDeDados();
$llConexao->Conectar();

$usuariosDAO = new DAO('usuarios');
$retorno = $usuariosDAO->pesquisar(' * ', $lcFiltro);

if (mysql_affected_rows() > 0) {
    echo 'login ok!';
} else {
    header("Location: ../login.php?erro=1");
}
?>
