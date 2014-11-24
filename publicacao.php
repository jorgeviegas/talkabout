<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Publicação</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/blog-post.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include ('view/include_navbar.php');
        $publicacao = (include 'controller/publicacao.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    echo '<h1>' . $publicacao->getPcTitulo() . '</h1>';
                    ?>
                    <?php
                    echo '<p class="lead">';
                    echo 'por <a target ="_blank" href="usuario.php?user=' . $publicacao->getPcUsername() . '"> ' . $publicacao->getPcNome() . '</a>';
                    echo '</p>';
                    ?>

                    <hr>

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                    <hr>
                    <?php
                    echo '<img class="img-responsive" src="' . $publicacao->getPcImagem() . '" alt="">'
                    ?>
                    <hr>
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

                    <?php
                    foreach ($publicacao->getPcComentarios() as $coment) {
                        echo '<div class="media">';
                        echo '<a class="pull-left" href="">';
                        echo '<img class="media-object" src="view/imagens/1413252617.jpg">';
                        echo '</a>';
                        echo '<div class="media-body">';
                        echo '<h4 class="media-heading">' . $coment['nome'];
                        echo '<small>August 25, 2014 at 9:30 PM</small></h4>';
                        echo $coment['descricao'];
                        echo '</div></div><hr>';
                    };
                    ?>


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
                    <div class="well">
                        <h4>Escreva um Comentário:</h4>
                        <form role="form" method="post"action="controller/comentario.php">
                            <div class="form-group">
                                <textarea name="descricao" class="form-control" rows="3"></textarea>
                                <?php
                                echo '<input type="hidden" name="id_publicacao" value="'.$publicacao->getPcId() . '"> </input>'
                                ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
            <hr>
        </div>
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
