<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['busca']))
    $lcBusca = $_GET['busca'];


$banco = new BancoDeDados();
$banco->conectar();
$usuariosDAO = new DAO(' usuarios u left join fotos f on f.id = u.id_foto ');
$consultaUsuarios = $usuariosDAO->pesquisar('u.username, u.id as id_user, u.nome', ' (u.username like "%' . $lcBusca . '%" or u.nome like "%' . $lcBusca . '%")');

$arrayUsuarios = array();

while ($linha = mysql_fetch_assoc($consultaUsuarios)) {
    $arrayUsuarios[] = $linha;
}

return $arrayUsuarios;
?>
