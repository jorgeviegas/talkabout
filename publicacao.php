<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Talk About - Publicação</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/blog-post.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <?php
        include ('view/include_navbar.php');
        $publicacao = (include 'controller/publicacao.php');
        ?>
        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-lg-8">

                    <!-- Blog Post -->

                    <!-- Title -->
                    <?php
                    echo '<h1>' . $publicacao->getPcTitulo() . '</h1>';
                    ?>
                    <!-- Author -->
                    <?php
                    echo '<p class="lead">';
                    echo 'por <a target ="_blank" href="usuario.php?user=' . $publicacao->getPcUsername() . '"> ' . $publicacao->getPcNome() . '</a>';
                    echo '</p>';
                    ?>

                    <hr>

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                    <hr>

                    <!-- Preview Image -->
                    <?php
                    echo '<img class="img-responsive" src="' . $publicacao->getPcImagem() . '" alt="">'
                    ?>
                    <hr>

                    <!-- Post Content -->
                    <p class="lead">
                        <?php
                        echo 'Instituição: <a target ="_blank" href="instituicao.php?inst=' . $publicacao->getpnIdInstituicao() . '">' . $publicacao->getPcNomeInstituicao();
                        echo '</a><br>';
                        echo 'Tipo: ' . $publicacao->getPcTipo() . '<img src="view/imagens/reclamacao.png"></img>'; 
                        echo '</p>';
                        echo '<p>';
                        echo $publicacao->getPcDescricao();
                        echo '</p>';
                        ?>

                        <br>
                    <h3>Comentários</h3>
                    <hr>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="view/imagens/1413252617.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Jorge Viegas
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Achei muito ofensivo.
                        </div>
                    </div>
                    <hr>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="view/imagens/1412688151.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Start Bootstrap
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            <!-- End Nested Comment -->
                        </div>
                    </div>
                    <br>

                    <!-- Comments Form -->
                    <div class="well">
                        <h4>Escreva um Comentário:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea name="comentario" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>

                    <hr>

                </div>


            </div>
            <!-- /.row -->

            <hr>
        </div>
        <!-- /.container -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
