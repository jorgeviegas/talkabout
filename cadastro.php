<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Talk About - Cadastro</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body background="view/imagens/bgcidade.jpg">
        <script type="text/javascript" src="controller/ajax.js">
        </script> 
        <script>
            function validarFormulario(){
                senha1 = document.registro.senha.value
                senha2 = document.registro.senha2.value
                erro = false
                if (senha1 != senha2){
                    erro = true
                    document.getElementById(666).style.display='inline'
                    document.getElementById(11).className="form-group has-error"
                    document.getElementById(12).className="form-group has-error"
                }
                
                if (erro == false){               
                    document.forms["registro"].submit()
                }    
            }
        </script>
        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="text-center">Bem-vindo ao Talk About!</h1>
                    </div>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block" method="post" name="registro" action="controller/cadastro.php" >

                            <div class="form-group">
                                <input name="nome" required type="text" class="form-control input-lg" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input name="username" required id="username" type="text" class="form-control input-lg" placeholder="Username">
                                <br>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success" onclick="validaUsername();">Validar Username</button>
                                    <div id="validauser" style="float:right;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name ="email" required type="text" class="form-control input-lg" placeholder="Email">
                            </div>
                            <div id="11" class="form-group">
                                <input name="senha" required type="password" class="form-control input-lg" placeholder="Senha">
                            </div>
                            <div id="12" class="form-group">
                                <input type="password" required class="form-control input-lg" name="senha2" placeholder="Confirme a Senha">
                                <span id="666" class="label label-danger" style='display: none'>Senhas não correspondem!</span>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="validarFormulario()">Registrar</button>
                                <br>
                                <span class="pull-right"><a href="#">Login</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>