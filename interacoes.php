<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Interacoes</title>
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
        $laGrupos = (include 'controller/pesquisa_grupos.php');
        $laAmigos = (include 'controller/pesquisa_amigos.php');
        ?>
        <div class="jumbotron">
            <div class="container">
                <h1>Interações</h1>
                <p></p>
            </div>
        </div>
        <div class="container">
            <h1>Amigos</h1>
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
            <h1>Grupos</h1>
            <hr>
            <?php
            if (empty($laResultados)) {
                echo '<h3>Nenhum resultado!</h3>';
            } else {
                foreach ($laNotificacoes as $linha) {
                    
                }
            }
            ?>
        </div>
        <hr>
    </div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
