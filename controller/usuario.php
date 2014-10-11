<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'model/Usuario.php';
include 'model/BancodeDados.php';
include 'model/DAO.php';

include ('view/include_navbar.html');
if (isset($_GET['user']))
    $lcUsername = $_GET['user'];

$banco = new BancoDeDados();
$banco->conectar();
$usuariosDAO = new DAO('usuarios');
$consulta = $usuariosDAO->pesquisar(' * ', ' username = "' . $lcUsername . '"');
if (mysql_affected_rows() > 0) {
    $registro = mysql_fetch_assoc($consulta);
    $usuario = new Usuario;
    $usuario->setUserName($registro['username']);
    $usuario->setNome($registro['nome']);
    $usuario->setEmail($registro['email']);
} else {
    echo 'erro';
};
return $usuario;
?>
