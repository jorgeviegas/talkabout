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
                       <?php
                        echo '<center><img src="'. $instituicao->getPcImagem() .'"></img></center>';
                        ?>
                       </div>
                </div>
                <div class="col-lg-8">
                    <?php
                    echo '<center><h1>' . $instituicao->getPcNome() . '</h1></center>';
                    ?>
                    <hr>
                    <?php
                    echo '<h3>' . $instituicao->getPcDescricao() . '</h3>';
                    ?>
                    <BR>
                    <BR>
                    <h3>Informações de Contato</h3>
                    <HR>
                    <?php
                    echo' <h4><b>Email:</b> ' . $instituicao->getPcEmail() . '</b></h4>';

                    echo '<h4><b>Fone:</b> ' . $instituicao->getPcFone() . '</h4>';
                    ?>


                    <BR>
                    <BR>
                    <form role="form">
                        <div class="form-group">
                            <label for="teste">Envie uma mensagem para Instituição:</label>
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
                        </ul>
                    </div>
                </div>

            </div>

            <h4>Elogios</h4>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                </div>
            </div>

            <h4>Sugestões</h4>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                    <span class="sr-only">20% Complete</span>
                </div>
            </div>  

            <h4>Reclamações</h4>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                    <span class="sr-only">80% Complete</span>
                </div>
            </div>
            <!-- /.row -->
            <hr>
        </div>
        <?php
        include ('view/include_rodape.php');
        ?>

        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
