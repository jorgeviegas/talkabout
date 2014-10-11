<?php

include '../model/BancoDeDados.php';
include '../model/DAO.php';

$llConexao = new BancoDeDados();
$llConexao->Conectar();


$lcNome = '';
$lcDescricao = '';
$lcTelefone = '';
$lcEmail = '';
$lcTipo = 0;

if (isset($_POST['nome']))
    $lcNome = $_POST['nome'];
if (isset($_POST['descricao']))
    $lcDescricao = $_POST['descricao'];
if (isset($_POST['telefone']))
    $lcTelefone = $_POST['telefone'];
if (isset($_POST['email']))
    $lcEmail = $_POST['email'];
if (isset($_POST['tipo']))
    $lcTipo = $_POST['tipo'];
if ($_FILES['arquivo']['error'] == 0) {
    $_UP['pasta'] = '../view/imagens/';
    $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
    $_UP['extensoes'] = array('jpg', 'png', 'gif');
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    if ($_FILES['arquivo']['error'] != 0) {
        die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
        exit;
    }
    $valor = explode('.', $_FILES['arquivo']['name']);
    $extensao = strtolower(array_pop($valor));
    if (array_search($extensao, $_UP['extensoes']) === false) {
        echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
    } else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
        echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    } else {
        $nome_final = time() . '.jpg';
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
            $fotosDAO = new DAO('fotos');
            $nome = $_UP['pasta'] . $nome_final;
            echo $fotosDAO->inserir('caminho', '"' . $nome . '"');
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }
}

$instituicoesDAO = new DAO('instituicoes');
$tcCampos = ' tipo, nome, descricao, fone, email ';
$tcValores = $lcTipo . ', "' . $lcNome . '","' . $lcDescricao . '","' . $lcTelefone . '","' . $lcEmail . '"';
if (isset($nome)) {
    $fotosDAO = new DAO('fotos');
    $registro = $fotosDAO->pesquisar(' id ',' caminho = "'.$nome.'"');
    $registra = mysql_fetch_array($registro);
    $lcIdFoto = $registra['id'];
    $tcCampos = ' tipo, id_foto, nome, descricao, fone, email ';
    $tcValores = $lcTipo . ','.$lcIdFoto.', "' . $lcNome . '","' . $lcDescricao . '","' . $lcTelefone . '","' . $lcEmail . '"';
};
$instituicoesDAO->inserir($tcCampos, $tcValores);
?>
