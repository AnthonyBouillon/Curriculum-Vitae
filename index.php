<?php
include_once 'Controllers/home-page-controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Contactez-moi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link href="Publics/LIB/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Publics/CSS/main.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Curriculum Vitae | Développeur web junior | Full-stack</h1>
        </header>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img class="responsive-img" src="http://eric.univ-lyon2.fr/~rabdesselam/fr/CV/MyCV.gif"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Accueil</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>
                    <li><a href="Views/contact.php">Contact</a></li>
                </ul>
            </div>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Accueil</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Contact</a></li>
            </ul>
        </nav>
        <footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h4 class="white-text">Anthony BOUILLON</h5>
                    <p class="grey-text text-lighten-4">Haut de france; Le Plessis-Brion; 60150</p>
                    <span><?= $compteur_visite ?></span>
            </div>
            <div class="col l4 offset-l2 s12 social-networks">
                <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-linkedin"></i> Linkedin</a><br/>
                <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter"></i> Twitter</a><br/>
                <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="Publics/JS/main.js"></script>
</body>
</html>