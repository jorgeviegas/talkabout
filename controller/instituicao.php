<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'model/Instituicao.php';
include_once 'model/BancodeDados.php';
include_once 'model/DAO.php';

if (isset($_GET['inst']))
    $lcInstituicao = $_GET['inst'];

$banco = new BancoDeDados();
$banco->conectar();
$usuariosDAO = new DAO('instituicoes i left join municipios m on m.id = i.id_mun');
$consulta = $usuariosDAO->pesquisar(' m.descricao as municipio, i.* ', ' i.id = ' . $lcInstituicao);
if (mysql_affected_rows() > 0) {
    $registro = mysql_fetch_assoc($consulta);
    $instituicao = new Instituicao;
    $instituicao->setPcDescricao($registro['descricao']);
    $instituicao->setPcNome($registro['nome']);
} else {
    echo 'erro';
};
return $instituicao;
?>
