<?php

include_once '../model/BancoDeDados.php';
include_once '../model/DAO.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$llConexao = new BancoDeDados();
$llConexao->Conectar();

$lcDescricao = '';
$lcTitulo = '';
$lcTipo = 0;

if (isset($_POST['nome']))
    $lcNome = $_POST['nome'];
if (isset($_POST['sobre']))
    $lcDescricao = $_POST['sobre'];

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
            $fotosDAO->inserir('caminho', '"' . substr($nome,1) . '"');
            $lcIdFoto = mysql_insert_id();
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }
}

if ($_FILES['arquivo_mini']['error'] == 0) {
    $_UP['pasta'] = '../view/imagens/';
    $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
    $_UP['extensoes'] = array('jpg', 'png', 'gif');
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    if ($_FILES['arquivo_mini']['error'] != 0) {
        die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo_mini']['error']]);
        exit;
    }
    $valor = explode('.', $_FILES['arquivo_mini']['name']);
    $extensao = strtolower(array_pop($valor));
    if (array_search($extensao, $_UP['extensoes']) === false) {
        echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
    } else if ($_UP['tamanho'] < $_FILES['arquivo_mini']['size']) {
        echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    } else {
        $nome_final = time() . '.jpg';
        if (move_uploaded_file($_FILES['arquivo_mini']['tmp_name'], $_UP['pasta'] . $nome_final)) {
            $fotosDAO = new DAO('fotos');
            $nome = $_UP['pasta'] . $nome_final;
            $fotosDAO->inserir('caminho', '"' . substr($nome,1) . '"');
            $lcIdMiniatura = mysql_insert_id();
        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }
}

$usuariosDAO = new DAO('usuarios');
$tcCamposValores = ' nome = "' . $lcNome . '",';
$tcCamposValores .= ' sobre = "' . $lcDescricao . '"';

if (isset($lcIdMiniatura)) {
    $tcCamposValores .= ' ,id_miniatura = ' . $lcIdMiniatura ;
}

if (isset($lcIdFoto)) {
    $tcCamposValores .= ' ,id_foto = ' . $lcIdFoto;
}

$usuariosDAO->atualizar($tcCamposValores, ' id =' . $_SESSION['id_usuario']);

//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
