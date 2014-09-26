<?php

/*
 * Description of Cadastro
 *
 * 
 * Este arquivo implementa a interação e as validações
 * necessárias para o Cadastro do Usuário.
 * 
 * Parâmetros: Recebe os campos do formulário da View de Cadastro.
 * 
 * @author Jorge
 */

include '../model/BancoDeDados.php';
include '../model/DAO.php';

if (isset($_POST['nome'])) $lcNome = $_POST['nome'];
if (isset($_POST['username'])) $lcUsername = $_POST['username'];
if (isset($_POST['email'])) $lcEmail = $_POST['email'];
if (isset($_POST['senha'])) $lcSenha = $_POST['senha'];
if (isset($_POST['senha2'])) $lcSenha2 = $_POST['senha2'];


$lcSenha = md5($lcSenha);

$lcValores = '"'.$lcUsername.'","'.$lcSenha.'","'.$lcNome.'","'.$lcEmail.'",'.'0';

echo $lcValores;

$llConexao = new BancoDeDados();
$llConexao->Conectar();

$usuariosDAO = new DAO('usuarios');
$lcResutaldo = $usuariosDAO->inserir('username,senha,nome,email,id_foto', $lcValores);

$your_email = $lcEmail;
$email_subject = "Bem-vindo ao Talk About!";
$email_content = "Bem-vindo ao Talk About, ".$lcNome. "!";

echo $lcResutaldo;


//if(@mail($your_email, $email_subject, $email_content)) {
$lcMensagem = 'Email enviado com Sucesso!';
//} else {
//$lcMensagem = 'Erro no envio do Email!';
//}

echo $lcMensagem;
?>
