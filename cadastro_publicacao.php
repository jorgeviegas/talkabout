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
        <link href="css/blog-post.css" rel="stylesheet">
        <link href="css/bootstrap-combobox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include ('view/include_navbar.html');
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
                    <form role="form">


                        <div class="form-group">
                            <label for="titulo">Título da Publicação</label>
                            <input type="text" class="form-control" id="titulo" placeholder="Título da Publicação">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Instituição</label>
                            <select class="combobox">
                                <option></option>
                                <option value="PA">Pennsylvania</option>
                                <option value="CT">Connecticut</option>
                                <option value="NY">New York</option>
                                <option value="MD">Maryland</option>
                                <option value="VA">Virginia</option>
                            </select>
                            <input type="text" class="form-control" id="outra" placeholder="Outra">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Descrição</label>
                            <textarea id="teste" class="form-control" rows="3" placeholder="Descricao"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Enviar foto</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">O arquivo deve ser nos formatos .jpg, .bmp ou .png!</p>
                        </div>
                       
                        <button type="button" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-ok"></span> Enviar
                        </button>                    </form>

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
