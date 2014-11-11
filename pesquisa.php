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
        <?php
        include ('view/include_navbar.php');
        $laNotificacoes = (include 'controller/pesquisa.php');
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
            if (empty($laNotificacoes)) {
                echo '<h3>Nenhum resultado!</h3>';
            } else {
                foreach ($laNotificacoes as $linha) {
                    echo $linha['username'];
                }
            }
            ?>

        </div>
        <div class="container">
            <h1>Publicações</h1>
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
        <div class="container">
            <h1>Instituições</h1>
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
    <!-- /.container -->
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
