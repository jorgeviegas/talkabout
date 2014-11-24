<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id_usuario']))
    $lcId = $_SESSION['id_usuario'];

$banco = new BancoDeDados();
$banco->conectar();
$gruposDAO = new DAO(' grupos g left join usuarios_grupos ga on ga.id_grupo = g.id ');
$consultaGrupos = $gruposDAO->pesquisar('g.id, g.nome, g.descricao ', ' ga.id_usuario =  ' . $lcId);

$array = array();

while ($linha = mysql_fetch_assoc($consultaGrupos)) {
    $array[] = $linha;
}

return $array;
?>
