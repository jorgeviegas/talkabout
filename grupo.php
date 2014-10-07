<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grupo</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/simple-sidebar_barra.css" rel="stylesheet">
        <link href="css/bootstrap.min_barra.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">



    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Talk About </a>
                </div>
                <form class="navbar-form navbar-left" role="buscar"> 
                    <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Buscar"> 
                    </div> <button type="submit" class="btn btn-default">Procurar</button> 
                </form>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Grupos</a>
                        </li>
                        <li>
                            <a href="cadastro_publicacao.php">Publicar</a>
                        </li>

                        <li>
                            <a href="#">Perfil</a>
                        </li>
                        <li>
                            <a class = "active" href="sobre.html">Sobre o Talk About</a>
                        </li>

                        <li>
                            <a href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- /.container -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#grupo.html">
                            Menu do Grupo
                        </a>
                    </li>
                    <li>
                        <a><img src ="img/grupo_img.jpg" height = "200px" width = "200px"></img></a>
                    </li>

                    <li>
                        <a href="#">Membros</a>
                    </li>
                    <li>
                        <a href="#">Publicações</a>
                    </li>
                    <li>
                        <a href="#">Últimas atualizações</a>
                    </li>
                    <li>
                        <a href="#">Sair</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">

                    <div class="descricao_grupo">
                        <h1>Nome do Grupo</h1>
                        <p>Grupo criado para discutirmos sobre as eleições desse ano.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>


                </div>

                </br></br>

                <div class="container-fluid">

                    <form>
                        <textarea rows="5" cols="50" name="publicacao" required placeholder="Escreva sua mensagem">
                        </textarea>
                        </br>
                        <input type="submit">
                    </form>
                    </br>



                    <div class="publicacao_grupo">
                        <h2>Article Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                            Aliquam in felis sit amet augue.</p>
                        <p class="lead"><button class="btn btn-default">Leia Mais</button></p>
                        <ul class="list-inline"><li><a href="#">2 comentários</a></li></ul>
                    </div>

                    <hr>

                    <div class="publicacao_grupo">
                        <h2>Article Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                            Aliquam in felis sit amet augue.</p>
                        <p class="lead"><button class="btn btn-default">Leia Mais</button></p>
                        <ul class="list-inline"><li><a href="#">2 comentários</a></li></ul>
                    </div>

                    <hr>      

                    <div class="publicacao_grupo">
                        <h2>Article Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                            Aliquam in felis sit amet augue.</p>
                        <p class="lead"><button class="btn btn-default">Leia Mais</button></p>
                        <ul class="list-inline"><li><a href="#">2 comentários</a></li></ul>
                    </div>

                    <hr>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>



    </body>

</html>
