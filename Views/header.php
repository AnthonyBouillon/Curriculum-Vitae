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
                    <li><a href="index.php">Accueil</a></li>
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
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="">Compétences</a></li>
                <li><a href="">Formations</a></li>
                <li><a href="">Expériences</a></li>
                <li><a href="">Projets</a></li>
                <li><a href="Contact">Contact</a></li>
                <li><a href="Publics/IMG/Anthony-Bouillon_CV.pdf">CV au format PDF</a></li>
                <li><a href="Certificats-d'openclassroom">Certificat d'openclassroom</a></li>
            </ul>
        </nav>
