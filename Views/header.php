<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Curriculum vitae numérique - Anthony Bouillon - Développeur web junior full-stack (HTML/CSS/JS et PHP), (Bootstrap, materialize, jQuery)" />
        <link rel="icon" type="image/png" href="Publics/IMG/icon/cv.png" sizes="16x16" />
        <link rel="Accueil" href="http://www.anthony-bouillon.fr/" />
        <link rel="stylesheet" href="Publics/LIB/materialize/css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="Publics/LIB/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="Publics/CSS/main.min.css" rel="stylesheet" />
        <title><?= $title ?></title>
    </head> 
    <body id="<?= $body ?>">
        <header>
            <h1>Curriculum Vitae &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Développeur web junior &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Full-stack</h1>
        </header>
        <nav>
            <div class="nav-wrapper">
                <a href="Accueil" class="brand-logo"><img class="responsive-img headshot-1 img-profile" src="Publics/IMG/anthony.png" title="Photo redirigeant vers la page d'accueil" alt="Photo"></a>
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
                    <li><a href="cv-format-pdf">CV au format PDF</a></li>
                    <li><a href="Certificats-d'openclassroom">Certificat d'openclassroom</a></li>
                </ul>
            </div>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="Accueil">Accueil</a></li>
                <li><a href="Compétence-Formation-Experience">Compétences</a></li>
                <li><a href="Liste-des-projets">Projets</a></li>
                <li><a href="cv-format-pdf">CV au format PDF</a></li>
                <li><a href="Certificats-d'openclassroom">Openclassroom</a></li>
                <li><a href="Contact">Contact</a></li>
            </ul>
        </nav>
