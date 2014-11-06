<?php

include_once '../model/BancoDeDados.php';
include_once '../model/DAO.php';
include_once '../model/Funcoes.php';

if (isset($_POST['id_usuario'])) {
    $lcIdUsuario = $_POST['id_usuario'];
}
if (isset($_POST['id_usu_logado'])) {
    $lcIdUsuLogado = $_POST['id_usu_logado'];
}
$llConexao = new BancoDeDados();
$llConexao->Conectar();

$amizadeDAO = new DAO('amigos');
$amizadeDAO->inserir('id_add, id_act, ativa', $lcIdUsuLogado . ',' . $lcIdUsuario . ',0');

$usuariosDAO = new DAO('usuarios u');
$consulta = $usuariosDAO->pesquisar(' u.* ', ' u.id = "' . $lcIdUsuLogado . '"');
$registro = mysql_fetch_assoc($consulta);
$lcNomeUsu = $registro['nome'];
$lcUsernameUsu = $registro['username'];

$lcMensagem = 'O Usuario ' . $lcNomeUsu . ' (' . $lcUsernameUsu . ') enviou uma solicitação de amizade!';

$notificacoesDAO = new DAO('notificacoes');
$notificacoesDAO->inserir('id_usuario, descricao', $lcIdUsuario . ',' . '"' .$lcMensagem .'"');
?>
