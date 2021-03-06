<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Logo Nav - Start Bootstrap Template</title>

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
                    <a class="navbar-brand" href="#">
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
        <div id="conteudo" class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 id="linha">Adivinha a Musica?</h1>
                    <p>Tente adivinhar o nome da musica e o cantor com apenas 15 segundos da musica, tente marcar o maior numero de pontos.</p>
                    <button  class="btn btn-success" onclick="jogar();">Vamos Jogar</button>

                </div>
            </div>
        </div>

        <!-- /.container -->

        <!-- jQuery -->
        <script src="vendor/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/js/bootstrap.min.js"></script>
        <script type="text/javascript">
                        function jogar() {
                            location.href = "jogo.php";
                        }
        </script>
    </body>

</html>
