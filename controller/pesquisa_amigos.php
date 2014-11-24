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
$amigosDAO = new DAO(' usuarios ');

$consultaAmigos = $amigosDAO->pesquisar('id, username, nome ', ' id in (select id_add from amigos where id_act = '.$lcId.' and ativa = 1) or id
 in (select id_act from amigos where id_add = '.$lcId.' and ativa = 1)');

$array = array();

while ($linha = mysql_fetch_assoc($consultaAmigos)) {
    $array[] = $linha;
}

return $array;
?>
