<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$banco = new BancoDeDados();
$banco->conectar();
$notificacoesDAO = new DAO(' notificacoes ');
$consulta = $notificacoesDAO->pesquisar(' descricao, tipo, lida, id_usuario ', ' id_usuario = ' . $_SESSION['id_usuario']);

$array_notificacoes = array();

while ($linha = mysql_fetch_assoc($consulta)) {
    $array_notificacoes[] = $linha;
}

$notificacoesDAO->atualizar('lida = 1', 'id_usuario = '. $_SESSION['id_usuario']);

return $array_notificacoes;
?>
