<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Talk About - Editar Perfil</title>


        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include_once 'model/Funcoes.php';
        include ('view/include_navbar.php');
        $loUsuario = include ('controller/alterar_perfil.php');
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Editar Perfil</h1>
                    <hr>
                    <form role="form" method="post" enctype="multipart/form-data" action="controller/editar_perfil.php">
                        <div class="form-group">
                            <label for="titulo">Nome</label>
                            <?php
                            echo '<input type="text" class="form-control" value="' . $loUsuario->getPcNome() . '" name="nome" placeholder="Nome">';
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Sobre Você</label>
                            <textarea id="sobre" class="form-control" name="sobre" rows="3"><?php echo $loUsuario->getPcNome(); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="titulo">Fone</label>
                            <?php
                            echo '<input type = "text" class = "form-control" value = "'. $loUsuario->getPcNome().'" name = "fone" placeholder = "Nome">';
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Enviar foto</label>
                            <input type="file" name="arquivo" id="exampleInputFile">
                            <p class="help-block">O arquivo deve ser nos formatos .jpg, .bmp ou .png!</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Enviar miniatura</label>
                            <input type="file" name="arquivo" id="exampleInputFile">
                            <p class="help-block">O arquivo deve ser nos formatos .jpg, .bmp ou .png!</p>
                            <p class="help-block">A miniatura é utilizada nos Comentários e na Pesquisa!</p>

                        </div>

                        <br>

                        <button type="submit" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-ok"></span> Salvar Alterações
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
