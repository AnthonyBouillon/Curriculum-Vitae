<?php
include_once 'Models/database.php';
include_once 'Models/visitors.php';
include_once 'Controllers/home-controller.php';
$title = 'Accueil';
$body = 'body_home';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link href="Publics/LIB/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="Publics/CSS/main.css" rel="stylesheet" />
    </head>
    <body id="<?= $body ?>">
        <header>
            <h1>Curriculum Vitae &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Développeur web junior &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Full-stack</h1>
        </header>
        <nav>
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"><img class="responsive-img headshot-1 img-profile" src="http://formation.novei.fr/assets/images/promo3/anthony.jpg" title="Photo redirigeant vers la page d'accueil" alt="Photo"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down bold">
                    <li><a href="Accueil">Accueil</a></li>
                    <li><a href="">Compétences</a></li>
                    <li><a href="">Formations</a></li>
                    <li><a href="">Expériences</a></li>
                    <li><a href="Liste-des-projets">Projets</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>Plus <i class="fa fa-caret-down"></i></a></li>
                    <li><a href="Contact">Contact</a></li>

                </ul>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="Publics/IMG/Anthony-Bouillon_CV.pdf">CV au format PDF</a></li>
                    <li><a href="Certificats-d'openclassroom">Certificat d'openclassroom</a></li>
                </ul>
            </div>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="Accueil">Accueil</a></li>
                <li><a href="">Compétences</a></li>
                <li><a href="">Formations</a></li>
                <li><a href="">Expériences</a></li>
                <li><a href="">Projets</a></li>
                <li><a href="Contact">Contact</a></li>
                <li><a href="Publics/IMG/Anthony-Bouillon_CV.pdf">CV au format PDF</a></li>
                <li><a href="Certificats-d'openclassroom">Certificat d'openclassroom</a></li>
            </ul>
        </nav>
<!-- Contenu -->
<!-- Fin du contenu -->
        <footer class="page-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l6 offset-l1 xl6 offset-xl1 headshot">
                <h3 class="black-text h3footer">Anthony BOUILLON</h3>
                <img class="responsive-img img_footer img-profile" src="http://formation.novei.fr/assets/images/promo3/anthony.jpg" title="Photo de profil" alt="Photo">
                <p class="black-text text-lighten-4 bold">Haut de france; Le Plessis-Brion, 60150; anthony-bouillon@outlook.fr; 06-49-70-52-50</p>
                <div class="bloc_social_icon">
                    <a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/anthony-bouillon-44313a151/"><i class="fa fa-linkedin" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Linkedin"></i></a>
                    <a class="grey-text text-lighten-3" href="https://twitter.com/_Ant_ho_ny_"><i class="fa fa-twitter" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Twitter"></i></a>
                    <a class="grey-text text-lighten-3" href="https://github.com/AnthonyBouillon"><i class="fa fa-github" aria-hidden="true" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Github"></i></a> 
                </div>
            </div>
            <div class="col s12 m4 offset-m1 l2 offset-l1 xl2 offset-xl1  headshot headshot-1">
                <h3 class="white-text center-align h3_info_footer">Information</h3>
                <p class="pfooter"><?= $count_views ?><br/><?= $number_visitors ?></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="Publics/JS/main.js"></script>
<script src="Publics/JS/display-text.js"></script>
</body>
</html>
