<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Qual Musica?</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="vendor/css/logo-nav.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
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
                    <a class="navbar-brand" href="index.php">
                        <img src="http://placehold.it/150x50&text=Logo" alt="">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Sobre</a>
                        </li>
                        <li>
                            <a href="#">Jogo</a>
                        </li>
                        <li>
                            <a href="#">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
            <h1 id="msg" class="alert-info"> Marque pontos descobrindo o nome das musicas.</h1>
            <div class="row center-block">
                <div class="col-lg-12">
                    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="gridModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid bd-example-row">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1 class="text-muted"> Escute com Atenção</h1>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <audio controls>
                                                <source src="Vendor/musicas/01 By The Way.mp3" type="audio/ogg" />
                                                <source src="Vendor/musicas/01 By The Way.mp3" type="audio/mpeg" />
                                                <a href="Vendor/musicas/01 By The Way.mp3">Musica</a>
                                            </audio>
                                            <form>
                                                <label for="nome" class="text-muted">Qual o nome da Banda?</label><br>
                                                <input type="radio" name="nome" value="RedHot" > Red Hot Chili Peppers<br>
                                                <input type="radio" name="nome" value="Blink"> Blink 182<br>
                                                <input type="radio" name="nome" value="Killers"> The Killers<br>
                                                <input type="radio" name="nome" value="Other" checked>Outros<br>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-1">
                        <div class="bd-example bd-example-padded-bottom">
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#gridSystemModal">
                                Jogar
                            </button>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="vendor/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#msg").fadeToggle(7000);
        });

    </script>
</body>

</html>
