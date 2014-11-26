<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'model/Instituicao.php';
include_once 'model/BancodeDados.php';
include_once 'model/DAO.php';
include_once 'model/Imagem.php';


if (isset($_GET['inst']))
    $lcInstituicao = $_GET['inst'];

$banco = new BancoDeDados();
$banco->conectar();
$usuariosDAO = new DAO('instituicoes i left join fotos f on f.id = i.id_foto');
$consulta = $usuariosDAO->pesquisar(' f.caminho,i.* ', ' i.id = ' . $lcInstituicao);
if (mysql_affected_rows() > 0) {
    $registro = mysql_fetch_assoc($consulta);
    $instituicao = new Instituicao;
    $instituicao->setPcDescricao($registro['descricao']);
    $instituicao->setPcNome($registro['nome']);
    $instituicao->setPcEmail($registro['email']);
    $instituicao->setPcFone($registro['fone']);
    $instituicao->setPcImagem($registro['caminho']);


    $image = new Imagem();
    $image->load($instituicao->getPcImagem());
    $image->resize(400, 300);
    $image->save($instituicao->getPcImagem());
} else {
    echo 'erro';
};
return $instituicao;
?>
