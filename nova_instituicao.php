<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Nova Publicação</title>
        <!-- Bootstrap Core CSS -->
        <!-- Custom CSS -->
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
        include ('view/include_navbar.html');
        ?>
        <script>
            function validarFormulario(){
          
                email = document.instituicao.email.value;
                validou = true;
                 
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if(email != ''){
                    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                        document.getElementById(555).style.display='inline';
                        document.getElementById(10).className="form-group has-error"
                        validou = false;
                    }    
                }
                return validou;
            }
        </script>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Blog Post Content Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
                    <!-- Title -->
                    <h1>Nova Instituição</h1>
                    <hr>
                    <form name="instituicao" role="form" method="post" enctype="multipart/form-data" onsubmit=" return validarFormulario()" action="controller/nova_instituicao.php">
                        <div class="form-group">
                            <label for="nome">Nome da Instituição</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da Instituição" required>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de Instituição</label>
                            <select name="tipo" class="input-large form-control" id="tipo">
                                <option value="1">Pública</option>
                                <option value="2">Privada</option>
                            </select>  
                        </div>
                        <div class="form-group">
                            <label for="titulo">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição"></textarea>
                        </div>
                        <div id="10" class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control"  name="email" placeholder="Email">
                        </div>
                        <span id="555" class="label label-danger" style='display: none'>Email inválido!</span>  
                        <div class="form-group">
                            <label for="titulo">Telefone</label>
                            <input type="text" class="form-control" name="fone" id="fone" placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Enviar foto</label>
                            <input type="file" name="arquivo" id="exampleInputFile">
                            <p class="help-block">O arquivo deve ser nos formatos .jpg, .bmp ou .png!</p>
                        </div>

                        <button type="submit" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-ok"></span> Enviar
                        </button>      


                        <div class="media">
                            <a class="pull-left" href="usuario.php?user=jorge">
                                <img class="media-object" src="view/imagens/1412688151.jpg" alt="Jorge Viegas">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Jorge Viegas</h4>
                                ASDIAUSHDUIAHS ESTA FERA

                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="usuario.php?user=jorge">
                                <img class="media-object" src="view/imagens/1412688151.jpg" alt="Jorge Viegas">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Henrique Martins</h4>
                                Glbooooo
                            </div>
                        </div>
                       <textarea class="form-control" id="descricao" name="descricao" placeholder="Comentario"></textarea>
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
