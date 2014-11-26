<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Nova Publicação</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
        <script src="js/star-rating.js" type="text/javascript"></script>
    </head>

    <body>
        <?php
        include_once 'model/Funcoes.php';
        include ('view/include_navbar.php');
        ?>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Blog Post Content Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
                    <!-- Title -->
                    <h1>Nova Publicação</h1>
                    <hr>
                    <form role="form" method="post" enctype="multipart/form-data" action="controller/nova_publicacao.php">
                        <div class="form-group">
                            <label for="titulo">Título da Publicação</label>
                            <input type="text" class="form-control" name="titulo" placeholder="Título da Publicação">
                        </div>
                        <div class="form-group">
                            <label for="instituicao">Instituição</label>
                            <?php
                            echo Funcoes::montarCombo('instituicoes', 'nome', 0, 0, 0, 'instituicao', '10');
                            ?>
                        </div>
                        <p class="help-block">Outra não listada? <a href="nova_instituicao.php">Clique aqui</a> para cadastrar</p>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <?php
                            echo Funcoes::montarCombo('publicacoes_tipos', 'descricao', 0, 0, 0, 'tipo', '99');
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea id="descricao" class="form-control" name="descricao" rows="3" placeholder="Descricao"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Enviar foto</label>
                            <input type="file" name="arquivo" id="exampleInputFile">
                            <p class="help-block">O arquivo deve ser nos formatos .jpg, .bmp ou .png!</p>
                        </div>


                        <br>
                        <br>
                        <button type="submit" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-ok"></span> Enviar
                        </button>                    
                    </form>
                    <hr>
                </div>
            </div>
            <hr>
        </div>

        <?php
        include ('view/include_rodape.php');
        ?>

        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
