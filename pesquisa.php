<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Resultados da Pesquisa</title>
        <!-- Bootstrap Core CSS -->
        <!-- Custom CSS -->
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php
        include ('view/include_navbar.php');
        $laUsuarios = (include 'controller/pesquisa_usuarios.php');
        $laInstituicoes = (include 'controller/pesquisa_instituicoes.php');
        $laPublicacoes = (include 'controller/pesquisa_publicacoes.php');
        ?>
        <!-- Page Content -->
        <div class="jumbotron">
            <div class="container">
                <h1>Resultados da Pesquisa</h1>
                <p></p>
            </div>
        </div>
        <div class="container">
            <h1>Usuários</h1>
            <hr>
            <?php
            if (empty($laUsuarios)) {
                echo '<h4>Nenhum resultado!</h4>';
            } else {
                foreach ($laUsuarios as $linha) {
                    echo '<h4> ' . $linha['nome'] . ' (<a target="_blank" href="usuario.php?user=' . $linha['username'] . '">' . $linha['username'] . '</a>)';
                }
            }
            ?>

        </div>
        <div class="container">
            <h1>Publicações</h1>
            <hr>
            <?php
            if (empty($laPublicacoes)) {
                echo '<h3>Nenhum resultado!</h3>';
            } else {
                foreach ($laPublicacoes as $linha) {
                    echo '<h4><a href="publicacao.php?publi=' . $linha['id'] . '">' . $linha['titulo'] . '</a></h4>';
                }
            }
            ?>

        </div>
        <div class="container">
            <h1>Instituições</h1>
            <hr>
            <?php
            if (empty($laInstituicoes)) {
                echo '<h3>Nenhum resultado!</h3>';
            } else {
                foreach ($laInstituicoes as $linha) {
                    echo '<h4><a href="instituicao.php?inst=' . $linha['id_insti'] . '">' . $linha['nome'] . '</a></h4>';
                }
            }
            ?>
        </div>
        <hr>
        <?php
        include ('view/include_rodape.php');
        ?>
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
