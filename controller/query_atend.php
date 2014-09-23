<?php

include '../model/BancoDeDados.php';
include '../model/DAO.php';

$conexao = new BancoDeDados();
$conexao->Conectar();
$usuariosDAO = new DAO('usuarios');

$tcUsername ='';
if (isset($_GET["username"])){
    $tcUsername = $_GET["username"];
}
$lcFiltro = ' username = "' . $tcUsername .'"';

$retorno = $usuariosDAO->pesquisar(' * ', $lcFiltro);
$retorno = mysql_query('select * from usuarios where username = "'.$tcUsername.'"');
if (mysql_affected_rows() == 0) {
$return = '<span class="label label-success">Username válido!</span>';
} else {
$return = '<span class="label label-warning">O username já está em uso!</span>';
}
echo $return;

