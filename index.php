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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Publics/LIB/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
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
                    <li><a href="Compétence-Formation-Experience">Compétences | Formations | Expériences</a></li>
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
                <li><a href="Compétence-Formation-Experience">Compétences</a></li>
                <li><a href="">Projets</a></li>
                <li><a href="Contact">Contact</a></li>
                <li><a href="Publics/IMG/Anthony-Bouillon_CV.pdf">CV au format PDF</a></li>
                <li><a href="Certificats-d'openclassroom">Certificat d'openclassroom</a></li>
            </ul>
        </nav>

<!-- Contenu -->
<div class="container">
<div class="row" id="test">
    <h2 class="center-align">Bienvenue sur mon CV numérique</h2>
</div>
<div class="row">
<p class="para-index col s11 offset-s1">Ayant obtenu depuis peu le titre professionnel « Développeur-se logiciel TP01280 » Niveau III.<br/>Je suis actuellement à la recherche d'un contrat de professionnalisation pour poursuivre en licence (BAC+3/4).<br/><br/>Alors, n'hésitez pas à me contacter via le formulaire de <a href="Contact">contact</a> et bonne visite :)</p>
</div>
</div>
<style>
#body_home{
background-color: beige;
}
.para-index {
    font-size: 25px;

}
#test2 {
    background-color: ;
}
</style>
<!-- Fin du contenu -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <!-- Taille du premier bloc -->
            <div class="col s12 m12 l6 offset-l1 xl6 offset-xl1 headshot">
                <h3 class="black-text" id="h3-name">Anthony BOUILLON</h3>
                <!-- Image de profil -->
                <img class="responsive-img img-profile" id="img-display" src="http://formation.novei.fr/assets/images/promo3/anthony.jpg" title="Photo de profil" alt="Photo">
                <p class="white-text text-lighten-4 bold para-footer">Haut de france; Le Plessis-Brion, 60150; anthony-bouillon@outlook.fr; 06-49-70-52-50</p>
                <!-- Icones des réseaux sociaux -->
                <a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/anthony-bouillon-44313a151/"><i class="fa fa-linkedin" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Linkedin"></i></a>
                <a class="grey-text text-lighten-3" href="https://twitter.com/_Ant_ho_ny_"><i class="fa fa-twitter" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Twitter"></i></a>
                <a class="grey-text text-lighten-3" href="https://github.com/AnthonyBouillon"><i class="fa fa-github" aria-hidden="true" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Github"></i></a> 
            </div>
            <!-- Taille du deuxième bloc -->
            <div class="col s12 m4 offset-m1 l2 offset-l1 xl2 offset-xl1 headshot headshot-1">
                <h3 class="white-text center-align" id="h3-info">Information</h3> 
                <p id="para-counter"><?= $count_views ?><br/><?= $number_visitors ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- Librairie materialize, le script javascript principale et le second -->
<script src="Publics/LIB/materialize/js/materialize.min.js"></script>
<script src="Publics/JS/main.js"></script>
<script src="Publics/JS/display-text.js"></script>
</body>
</html> 