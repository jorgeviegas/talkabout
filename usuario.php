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
        include ('view/include_navbar.php');
        $usuario = (include 'controller/usuario.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        <?php
                        echo '<img src ="' . $usuario->getPcImagem() . '"></img>'
                        ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <?php
                    echo '<h1>' . $usuario->getPcNome() . '</h1>';
                    ?>
                    
                    <?php
                    if ($_SESSION['id_usuario'] != $usuario->getPcId()) {
                        echo '<hr>';
                        switch ($usuario->getPnAmigo()) {
                            case 0:
                                echo '<form action="controller/control_amizade.php" method="post">';
                                echo '<input type="hidden" name="id_usuario" value="' . $usuario->getPcId() . '">';
                                echo '<input type="hidden" name="id_usu_logado" value="' . $_SESSION['id_usuario'] . '">';
                                echo '<input type="hidden" name="tipo" value="1">
                                <button type="submit" class="btn btn-info btn">
                                  <span class="glyphicon glyphicon-plus"></span>  Adicionar Usuário
                                  </button></form>';
                                break;
                            case 1:
                                echo '<input type="hidden" name="tipo" value="2"> 
                                <button type="submit" class="btn btn-warning btn">
                        <span class="glyphicon glyphicon-share-alt"></span>  Solicitação de Amizade Enviada
                    </button>';
                                break;
                            case 2:
                                echo '<button type="submit" class="btn btn-success btn">
                        <span class="glyphicon glyphicon-ok"></span>  Amigos
                    </button>';
                                break;
                        }
                    }
                    ?>
                    <!--                 <button type="submit" class="btn btn-danger btn">
                                            <span class="glyphicon glyphicon-remove"></span>  Remover Amizade
                                        </button>
                    
                                        <button type="submit" class="btn btn-success btn">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                        </button>
                                        <button type="submit" class="btn btn-danger btn">
                                            <span class="glyphicon glyphicon-thumbs-down"></span>
                                        </button>-->
                    <hr>
                    <h3><span class="glyphicon glyphicon-map-marker"></span> Esteio, RS</h3>
                    <BR>
                    <BR>
                    <h3>Informações de Contato</h3>
                    <HR>
                    <?php
                    echo' <h4>
                            <span class="glyphicon glyphicon-envelope"></span>
                            <b> Email: </b>' . $usuario->getPcEmail() .
                    '</h4>';
                    ?>
                    <h4>
                        <span class="glyphicon glyphicon-earphone"></span>    <b>Fone: </b>(00)1234458
                    </h4>
                    <BR>
                    <BR>
                    <form role="form">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-comment"></span> 
                            <label for="teste">Envie uma mensagem para Jorge:</label>
                            <textarea id="mensagem" class="form-control" rows="3" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="button" class="btn btn-default btn-lg">
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
