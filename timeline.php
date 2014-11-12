<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Página Inicial</title>
        <link href="css/bootstrap_timeline.css" rel="stylesheet">
    </head>   
    <body>
        <?php
        include ('view/include_navbar.php');
        $laPublicacoes = (include 'controller/control_timeline.php');
        ?>
        </br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-header">
                        Timeline de Publicações
                    </h1>

                    <?php
                    if (empty($laPublicacoes)) {
                        echo 'Nenhuma publicação!';
                    } else {
                        foreach ($laPublicacoes as $linha) {
                            $linha->exibirTimeline();
                        }
                    }
                    ?>

                    <!-- Pager -->
                    <ul class="pager">
                        <li class="previous">
                            <a href="#">&larr; Voltar</a>
                        </li>
                        <li class="next">
                            <a href="#">Avançar &rarr;</a>
                        </li>
                    </ul>

                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">
                    </br></br></br></br>
                    <div class = "bannerGruposTL">
                        <div class="quadroG">
                            <h3 class = "h3tlGrupos">Meus Grupos</h3>
                            <ul class="listaTL">
                                <li><a class = "linkGrupoTL" href="#">Grupo 1</a>
                                </li>
                                <li><a class = "linkGrupoTL" href="#">Grupo 2</a>
                                </li>
                                <li><a class = "linkGrupoTL" href="#">Grupo 3</a>
                                </li>
                                <li><a class = "linkGrupoTL" href="#">Grupo 4</a>
                                </li>
                            </ul> 
                        </div>
                    </div>

                    <!-- Side Widget Well -->
                    <div class="quadroB">
                        <h3 class = "h3tlBanner">Timeline</h3>
                        <p class = "ptlBanner">Acompanhe tudo que os outros usuário estão publicando! Fique por dentro dos assuntos!</p>
                    </div>


                    <div class="quadroD">
                        <h3 class = "h3tlDuvidas">Dúvidas sobre o Talk About?</h3>
                        <p class = "ptlDuvidas">Veja nossa página tutorial para você esclarecer todas suas dúvidas. Clique <a class = "bannerAjudaLink" href = "sobre.php" target = "_blank"> aqui</a>!</p>
                    </div>


                </div>

            </div>
            <!-- /.row -->

            <hr>


        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        </br> </br>

        <div class="rodape">

            <p><img src="img/logo_rodape.png" alt="Talk About"
                    style="float:left ; width:200px; height:120px">
            <h2>&nbsp Talk About, onde sua opinião é importante!</h2>
            <b>&nbsp &nbsp &nbsp Site desenvolvido por:</b> Henrique Martins e Jorge Viegas</br>
            <b>&nbsp &nbsp &nbsp Contatos:</b> ctmhenrique@gmail.com e jorgematheusv@gmail.com</p>
    </div>
</body>

</html>