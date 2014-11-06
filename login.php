<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Talk About - Login</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>

    <body background="view/imagens/bglogin.jpg">
        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="text-center">Login</h1>
                    </div>
                    <div class="modal-body">
                        <form name="loginform" enctype="multipart/form-data" class="form col-md-12 center-block" method="post" action="controller/control_login.php">
                            <div class="form-group" id ="12">
                                <input type="text" name="usuario" class="form-control input-lg" placeholder="Username" required>
                            </div>
                            <div class="form-group" id="11">
                                <input type="password" name="senha" class="form-control input-lg" placeholder="Senha" required>
                                <br>
                                <span id="666" class="label label-danger" style='display: none'>Combinação incorreta de Username/Senha!</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="send">Entrar</button>
                                <span class="pull-right"><a href="cadastro.php">Cadastre-se</a></span><span><a href="#">Ajuda</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Voltar</button>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_GET["erro"]))
            echo '<script>
            document.getElementById(666).style.display="inline"
            document.getElementById(11).className="form-group has-error"
            document.getElementById(12).className="form-group has-error"
            </script>';
        ?>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>