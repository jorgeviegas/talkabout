<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once '../model/BancoDeDados.php';
include_once '../model/DAO.php';
include_once '../model/Funcoes.php';

if (isset($_POST['botao'])) {
    $lcEscolha = $_POST['botao'];
}

if (isset($_POST['id_add'])) {
    $lcIdAdd = $_POST['id_add'];
}

if (isset($_POST['id_noti'])) {
    $lcIdNoti = $_POST['id_noti'];
}


$llConexao = new BancoDeDados();
$llConexao->Conectar();

$amizadeDAO = new DAO('amigos');

if ($lcEscolha == 2) {
    $amizadeDAO->atualizar(' ativa = 1 ', ' id_add = ' . $lcIdAdd . ' and id_act = ' . $_SESSION['id_usuario']);
} else {
    $amizadeDAO->deletar(' id_add = ' . $lcIdAdd . ' and id_act = ' . $_SESSION['id_usuario']);
};

$usuariosDAO = new DAO('usuarios u');
$consulta = $usuariosDAO->pesquisar(' u.* ', ' u.id = "' . $_SESSION['id_usuario'] . '"');
$registro = mysql_fetch_assoc($consulta);
$lcNomeUsu = $registro['nome'];
$lcUsernameUsu = $registro['username'];

$lcMensagem = 'O Usuario ' . $lcNomeUsu . ' (' . $lcUsernameUsu . ') aceitou sua solicitacao de amizade!';

$notificacoesDAO = new DAO('notificacoes');
$notificacoesDAO->inserir('id_usuario, descricao, tipo', $lcIdAdd . ',' . '"' . $lcMensagem . '",1');
$notificacoesDAO->deletar('id = ' . $lcIdNoti);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
