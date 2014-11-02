<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Notificações</title>
        <!-- Bootstrap Core CSS -->
        <!-- Custom CSS -->
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
                foreach ($laNotificacoes as $linha) {
                    echo '<div class="alert alert-info" role="alert">
                        <span class="glyphicon glyphicon-bell"></span> <b> Nova! </b>' 
                        . date("F j, Y, g:i a") . $linha['descricao'] . '</div>';
                    
                    
                }
                       
                       echo '<div class="alert alert-warning" role="alert">
                        ' 
                        . date("F j, Y, g:i a") . $linha['descricao'] . '</div>';
                
               echo '<div class="alert alert-success" role="alert">
                       ' 
                        . date("F j, Y, g:i a") . $linha['descricao'] . '</div>';
               
               
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
