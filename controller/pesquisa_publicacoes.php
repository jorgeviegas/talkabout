<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['busca']))
    $lcBusca = $_GET['busca'];

$banco = new BancoDeDados();
$banco->conectar();
$publicacoesDAO = new DAO(' publicacoes ');
$consultaPublicacoes = $publicacoesDAO->pesquisar('id, titulo, descricao ', ' titulo like "%' . $lcBusca . '%" or descricao like "%' . $lcBusca . '%"');

$array = array();

while ($linha = mysql_fetch_assoc($consultaPublicacoes)) {
    $array[] = $linha;
}

return $array;
?>
