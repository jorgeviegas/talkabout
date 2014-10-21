<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Usuário</title>
        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include ('view/include_navbar.html');
        $usuario = (include 'controller/usuario.php');
        ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">
                    <!-- Blog Search Well -->
                    <div class="well">
                        <img src ="view/imagens/jorge.jpg"></img>
                        <!-- /.input-group -->
                    </div>
                    <!-- Side Widget Well -->
                    <div class="well">
                        <h4><center>Conquistas</center></h4>
                        <img src ="view/imagens/admin.jpg"></img>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                    </div>

                </div>
                <!-- Blog Post Content Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
                    <!-- Title -->
                    <?php
                    echo '<h1>' . $usuario->getNome() . '</h1>';
                    ?>
                    <hr>
                    <h3>Esteio, RS</h3>
                    <BR>
                    <BR>
                    <h3>Informações de Contato</h3>
                    <HR>
                    <?php
                    echo' <h4><b>Email:</b>' . $usuario->getEmail() . '</h4>';
                    ?>

                    <h4><b>Fone: </b>(00)1234458</h4>
                    <BR>
                    <BR>
                    <form role="form">
                        <div class="form-group">
                            <label for="teste">Envie uma mensagem para Jorge:</label>
                            <textarea id="teste" class="form-control" rows="3" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="button" class="btn btn-default btn-lg">
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
