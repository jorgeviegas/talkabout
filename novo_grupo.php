<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Talk About - Novo Grupo</title>

        <!-- Bootstrap Core CSS -->
        <!-- Custom CSS -->
        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include 'model/Funcoes.php';
        include ('view/include_navbar.html');
        ?>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Blog Post Content Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
                    <!-- Title -->
                    <h1>Novo Grupo</h1>
                    <hr>
                    <form role="form" method="post" enctype="multipart/form-data" action="controller/novo_grupo.php">
                        <div class="form-group">
                            <label for="titulo">Nome do Grupo</label>
                            <input type="text" class="form-control" id="titulo" name="nome" placeholder="Nome do Grupo">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea id="descricao" class="form-control" rows="3" name ="descricao"placeholder="Descricao"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Enviar foto</label>
                            <input type="file" name="arquivo" id="exampleInputFile">
                            <p class="help-block">O arquivo deve ser nos formatos .jpg, .bmp ou .png!</p>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-ok"></span> Enviar
                        </button>         
                    </form>
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
