<?php

include_once './model/BancoDeDados.php';
include_once './model/Publicacao.php';
include_once './model/DAO.php';
include_once './model/Usuario.php';
include_once './model/Imagem.php';


$conexao = new BancoDeDados();
$conexao->Conectar();
$publicacoesDAO = new DAO('publicacoes p left join publicacoes_tipos pt on pt.id = p.id_tipo left join instituicoes i on i.id = p.id_instituicao left join fotos f on f.id = p.id_foto left join usuarios u on u.id = p.id_usuario');
$query = $publicacoesDAO->pesquisar(' pt.descricao as desc_tipo, i.nome as nome_inst,f.caminho,p.*,u.nome, u.username,u.id as id_usu ', 'true order by p.id limit 5');

$array_timeline = array();

while ($linha = mysql_fetch_assoc($query)) {
    $publicacao = new Publicacao();
    $publicacao->setPcDescricao($linha['descricao']);
    $publicacao->setPcId($linha['id']);
    $publicacao->setPcImagem($linha['caminho']);
    $publicacao->setPnIdUusuario($linha['id_usu']);
    $publicacao->setPcNome($linha['nome']);
    $publicacao->setPcNomeInstituicao($linha['nome_inst']);
    $publicacao->setPcTitulo($linha['titulo']);
    $publicacao->setPcUsername($linha['username']);
    $publicacao->setPnIdInstituicao($linha['id_instituicao']);
    $publicacao->setPnIdUusuario($linha['id_usuario']);
    $publicacao->setPcTipo($linha['desc_tipo']);

    $image = new Imagem();
    $image->load($publicacao->getPcImagem());
    $image->resize(900, 300);
    $image->save($publicacao->getPcImagem());
    
    $array_timeline[] = $publicacao;
}

return $array_timeline;
?>
