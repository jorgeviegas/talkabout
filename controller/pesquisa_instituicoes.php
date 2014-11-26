<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['busca']))
    $lcBusca = $_GET['busca'];

$banco = new BancoDeDados();
$banco->conectar();
$instituicoesDAO = new DAO(' instituicoes i left join fotos f on f.id = i.id_foto ');
$consultaInstituicoes = $instituicoesDAO->pesquisar('i.nome, i.id as id_insti, f.caminho', ' (i.nome like "%' . $lcBusca . '%" or i.descricao like "%' . $lcBusca . '%")');

$array = array();

while ($linha = mysql_fetch_assoc($consultaInstituicoes)) {
    $array[] = $linha;
}

return $array;
?>
