<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Instituição</title>
        <!-- Bootstrap Core CSS -->
        <!-- Custom CSS -->
        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include ('view/include_navbar.php');
        $instituicao = (include 'controller/instituicao.php');
        ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-24">
                    <div class="well">
                        <center><img src ="view/imagens/1413026261.jpg"></img></center>
                    </div>
                </div>
                <!-- Blog Post Content Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
                    <!-- Title -->
                    <?php
                    echo '<center><h1>' . $instituicao->getPcNome() . '</h1></center>';
                    ?>
                    <hr>
                    <?php
                    echo '<h3>' .$instituicao->getPcDescricao().'</h3>';
                    ?>
                    <BR>
                    <BR>
                    <h3>Informações de Contato</h3>
                    <HR>
                    <?php
                    echo' <h4><b>Email:</b></h4>';
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
                <div class="col-md-4">
                    <div class="well">

                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Publicar</a></li>
                            <li><a href="#">Sugerir Alteração</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                    <span class="sr-only">20% Complete</span>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">60% Complete (warning)</span>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                    <span class="sr-only">80% Complete</span>
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
