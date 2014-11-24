<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once '../model/BancoDeDados.php';
include_once '../model/DAO.php';

if (isset($_POST['descricao'])) $lcDescricao = $_POST['descricao'];
if (isset($_POST['id_publicacao'])) $lcIdPubli = $_POST['id_publicacao'];

$lcIdUsuario = $_SESSION['id_usuario'];

$lcValores = $lcIdUsuario . ','.$lcIdPubli.',"'.$lcDescricao.'"';

$llConexao = new BancoDeDados();
$llConexao->Conectar();

$comentariosDAO = new DAO('comentarios');
$lcResutaldo = $comentariosDAO->inserir('id_usuario, id_publicacao, descricao', $lcValores);

$lcMensagem = 'O Usuario ' . $lcNomeUsu . ' ('.$lcUsernameUsu.') comentou uma publicação sua!';

$notificacoesDAO = new DAO('notificacoes');
$notificacoesDAO->inserir('id_usuario, descricao, tipo', $lcIdUsuario . ',' . '"' .$lcMensagem .'",1');



?>
