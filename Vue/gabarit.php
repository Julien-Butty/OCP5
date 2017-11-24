<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <base href="<?= $racineWeb ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Contenu/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="Contenu/style.css">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">


    <title><?= $titre ?></title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="Contenu/materialize.js"></script>
    <![endif]-->
</head>

<body class="grey lighten-3">
<div>
    <!--Parallax pic and text-->
    <section class="parallax-container">
        <div class="row valign-wrapper name ">
            <div class="s12 center row">
                <div>
                    <h1><span class="white-text">Julien<span class="light-blue-text text-accent-3"> Butty</span></h1>
                </div>
                <div>
                    <h5 class="center white-text">Parce que vous le codez bien !</h5>
                </div>


                <div class="parallax">
                    <img class="responsive-img" src="Contenu/img/desk.png">
                </div>
    </section>


    <!--Navbar    -->
    <nav class="nav-wrapper grey darken-4 ">


        <div class="container">
            <a class="brand-logo" href="index.php">Julien <span class="light-blue-text text-accent-3">Butty</span></a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>


            <ul class="right hide-on-med-and-down">
                <li><a href="Accueil">Accueil</a></li>
                <li><a href="Billet">Post</a></li>
                <li><a href="billet/creer">Créer post</a></li>
            </ul>

            <ul id="mobile-menu" class="side-nav">
                <li><a href="Accueil">Accueil</a></li>
                <li><a href="Billet">Post</a></li>
<<<<<<< HEAD
                <li><a href="Billet/creer">Créer post</a></li>
=======
                <li><a href="billet/creer">Créer post</a></li>
>>>>>>> master
            </ul>
        </div>

    </nav>

    <!--Content-->
    <header class="container">
        <a href=""><h4 class="light-blue-text text-accent-3"><?= $titre ?></h4></a>
        <p></p>
    </header>
    <div id="contenu">
<<<<<<< HEAD

=======
>>>>>>> master
        <?= $contenu ?>
    </div>


    <footer class="page-footer grey darken-3 ">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Julien Butty</h5>
                    <p class="grey-text text-lighten-4">Développeur d'application Php/Symfony</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text s12">Liens</h5>
                    <div class="row ">
                        <div class="col s4">
                            <a href="https://github.com/Julien-Butty">
                                <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col s4">
                            <a href="https://twitter.com/julienbutty">
                                <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col s4">
                            <a href="https://fr.linkedin.com/in/julien-butty-471869a4">
                                <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4 ">
            <div class="container">
                © 2017 Copyright Text
                <a href=""></a>
            </div>
        </div>


    </footer>
</div>

<!-- jQuery and JavaScript
    ================================================== -->
<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


<script>
    jQuery(document).ready(function ($) {
        $(".button-collapse").sideNav();
        $(".parallax").parallax();
        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });


    });
</script>
<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>


</body>
</html>
