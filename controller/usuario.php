<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'model/Usuario.php';
include 'model/BancodeDados.php';
include 'model/DAO.php';

if (isset($_GET['user']))
    $lcUsername = $_GET['user'];

$banco = new BancoDeDados();
$banco->conectar();
$usuariosDAO = new DAO('usuarios u left join fotos f on f.id = u.id_foto');
$consulta = $usuariosDAO->pesquisar(' u.*, f.caminho ', ' u.username = "' . $lcUsername . '"');
if (mysql_affected_rows() > 0) {
    $registro = mysql_fetch_assoc($consulta);
    $usuario = new Usuario;
    $usuario->setPcUserName($registro['username']);
    $usuario->setPcNome($registro['nome']);
    $usuario->setPcEmail($registro['email']);
    $usuario->setPcImagem($registro['caminho']);
} else {
    echo 'erro';
};
return $usuario;
?>
