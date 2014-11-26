<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Notificações</title>
        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include ('view/include_navbar.php');
        $laNotificacoes = (include 'controller/notificacoes.php');
        ?>
        <!-- Page Content -->
        <div class="jumbotron">
            <div class="container">
                <h1>Notificações</h1>
                <p></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                if (empty($laNotificacoes)) {
                    echo 'Nenhuma notificação!';
                } else {
                    foreach ($laNotificacoes as $linha) {
                        switch ($linha['tipo']) {
                            case 1:
                                echo '<div class="alert alert-success" role="alert">';
                                if ($linha['lida'] == 0) {
                                    echo '<span class="glyphicon glyphicon-bell"></span> <b> Nova! </b>';
                                }
                                echo $linha['descricao'] . '  
                                  
                                <form role = "form" method="post" action = "controller/adicionar_amigo.php">
                                <div class = "form-group">
                                <input type="hidden" name="id_add" value="' . $linha['id_usuario_ref'] . '"></input>
                                <input type="hidden" name="id_noti" value="' . $linha['id'] . '"></input>
                                <button type = "submit" name="botao" value = "2" class = "btn btn-success"> Aceitar </button>
                                <button type = "submit" name="botao" value = "1" class = "btn btn-danger"> Recusar </button>
                                </div>
                                </form>';
                                break;
                            case 2:
                                echo '<div class="alert alert-info" role="alert">';
                                if ($linha['lida'] == 0) {
                                    echo '<span class="glyphicon glyphicon-bell"></span> <b> Nova! </b>';
                                }
                                echo $linha['descricao'] . '                                  
                                </div>';
                                break;

                            case 3:
                                break;

                            case 4:
                                break;
                        }
                    }
                }


                //echo '<div class="alert alert-success" role="alert">. date("F j, Y, g:i a") . $linha['descricao'] . '</div>';
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
