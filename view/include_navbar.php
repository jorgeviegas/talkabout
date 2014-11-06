<?php
include_once 'model/BancodeDados.php';
include_once 'model/DAO.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$lnIdUsuario = $_SESSION['id_usuario'];
$lnNumNot = 0;

$banco = new BancoDeDados();
$banco->conectar();
$notificacoesDAO = new DAO(' notificacoes ');
$consulta = $notificacoesDAO->pesquisar(' * ', 'lida = 0 and id_usuario = ' . $lnIdUsuario);
if (mysql_affected_rows() > 0) {
    $lnNumNot = mysql_affected_rows();
};

if ($lnNumNot == 0) {
    $lnNumNot = '';
};
?>

<link rel="icon" type="image/ico" href="../favicon.ico">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="view/imagens/reduzida.png" alt="Talk About"
             style="float:left; width:130px; height: 50px">
        </div>
        <form class="navbar-form navbar-left" role="buscar"> 
            <div class="form-group"> 
                <input type="text" class="form-control" placeholder="Buscar"> 
            </div> <button type="submit" class="btn btn-default">Procurar</button> 
        </form>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Grupos</a>
                </li>
                <li>
                    <a href="nova_publicacao.php">Publicar</a>
                </li>

                <li>
                    <a href="usuario.php">Perfil</a>
                </li>
                <li>
<?php
echo '<a href="sobre.php">Notificações <span class="badge">' . $lnNumNot . '</span></a>'
?>
                </li>
                <li>
                    <a href="sobre.php">Sobre o Talk About</a>
                </li>
                <li>
                    <a href="#">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>