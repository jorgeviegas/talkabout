<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Talk About - Sobre</title>
        <link href="css/bootstrap_sobre.css" rel="stylesheet">
    </head>   
    <body>
        <?php
        include ('view/include_navbar.php');
        ?>
        <br>
        <br>
        <br>
        <br>
        <div class="jumbotron">
            <div class="container">
                <h1><center>Informações sobre o Talk About</center></h1>
                <p></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="view/imagens/tl.png" alt="Timeline" style = "width: 500px; height: 300px">
                        <div class="caption">
                            <h3>Timeline</h3>
                            <p>A timeline é o local onde você pode ver o que os outros usuários estão postando. Ela é a página principal do Talk About. É sempre bom ficar atento ao que acontece na Timeline.</p>
                            <p><a href="timeline.php" class="btn btn-primary" role="button">Timeline</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="view/imagens/perfil.png" alt="Perfil" style = "width: 500px; height: 300px">
                        <div class="caption">
                            <h3>Perfil</h3>
                            <p>No perfil de usuário, você pode ver seus dados, como também, visitar os perfis de outros usuários do Talk About. É na tela de perfil que você pode adicionar um usuário..</p>
                            <p><a href="usuario.php" class="btn btn-primary" role="button">Ver perfil</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="view/imagens/grupo.png" alt="Grupos" style = "width: 500px; height: 300px">
                        <div class="caption">
                            <h3>Grupos</h3>
                            <p>Na tela de grupos, você pode visualizar todas as publicações dos usuários que pertencem ao grupo. Caso você seja o criador do grupo, você poderá adicionar usuários para o mesmo.</p>
                            <p><a href="novo_grupo.php" class="btn btn-primary" role="button">Criar Grupo</a></p>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="view/imagens/publicacao.png" alt="Publicações" style = "width: 500px; height: 300px">
                        <div class="caption">
                            <h3>Publicar</h3>
                            <p>É através de uma publicão que você expressa sua opinião para os demais usuários. A publicação é a principal funcionalidade do Talk About. Não deixe de publicar!</p>
                            <p><a href="nova_publicacao.php" class="btn btn-primary" role="button">Publicar</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="view/imagens/ranking.png" alt="Ranking" style = "width: 500px; height: 300px">
                        <div class="caption">
                            <h3>Ranking</h3>
                            <p>Na tela de ranking, você pode visualizar a "classificação" das instituições. Informações que você encontrará no ranking: número de críticas, elogios e sugestões a uma instituição. Confira!</p>
                            <p><a href="ranking.php" class="btn btn-primary" role="button">Ranking</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <img src="view/imagens/notificacao.png" alt="Notificações" style = "width: 500px; height: 300px">
                        <div class="caption">
                            <h3>Notificações</h3>
                            <p>Na tela de notificações, você pode visualizar todas as interações que outros usuários fizeram com você. Nessa tela você pode encontrar convites para amizades, mensagens, entre outros.</p>
                            <p><a href="notificacoes.php" class="btn btn-primary" role="button">Notificações</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </br> 
        </br>
        <?php
        include ('view/include_rodape.php');
        ?>
    </body>
</html>