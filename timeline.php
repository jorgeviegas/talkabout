<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Página Inicial</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>   
    <body>
        <?php
        include ('view/include_navbar.php');
        ?>
        <br>
        <br>
        <br>
        <br>
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

                </div>

                <div class="col-md-4">

                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>
                            <center>Instituição</center>
                        </h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li>
                                        Antes de realizar o registro de uma nova instituição,
                                        certifique-se de que a mesma não está cadastrada no sistema.
                                        Escreva corretamente o nome da instituição a ser cadastrada.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Categories Well -->
                    <div class="well">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3><center>Dúvidas sobre o Talk About?</center></h3>
                                <p>Veja nossa página tutorial para você esclarecer todas suas dúvidas. Clique <a href = "sobre.php" target = "_blank"> aqui</a>!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr>


        </div>


        </br> </br>

        <?php
        include ('view/include_rodape.php');
        ?>
    </body>

</html>