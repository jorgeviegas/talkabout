<?php

include '../model/BancoDeDados.php';
include '../model/DAO.php';
include '../model/Funcoes.php';


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
    $registro = mysql_fetch_array($retorno);
    Funcoes::iniciarSessao($registro['id']);
    header("Location: ../usuario.php?user=".$registro['username']); 
} else {
    header("Location: ../login.php?erro=1");
}
?>
