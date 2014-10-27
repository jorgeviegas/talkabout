<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'model/BancodeDados.php';
include 'model/DAO.php';

$banco = new BancoDeDados();
$banco->conectar();
$notificacoesDAO = new DAO(' notificacoes ');
$consulta = $notificacoesDAO->pesquisar(' descricao ', ' id_usuario = 1');

$array_notificacoes = array();

while ($linha = mysql_fetch_assoc($consulta)) {
    $array_notificacoes[] = $linha;
}

$notificacoesDAO->atualizar('lida', '1', 'id_usuario = 1');

return $array_notificacoes;
?>
