<?php
include_once 'Models/database.php';
include_once 'Models/visitors.php';
include_once 'Controllers/home-controller.php';
$title = 'CV développeur web junior | Full-stack- Anthony Bouillon';
$body = 'body_home';
?> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Curriculum vitae numérique - Anthony Bouillon - Développeur web junior full-stack (HTML/CSS/JS et PHP), (Bootstrap, materialize, jQuery)" />
        <meta name="keywords" CONTENT="curriculum vitae,cv,développeur web, numérique, contrat de professionnalisation" />
        <link rel="shortcut icon" href="Publics/IMG/icon/cv.png" type="image/x-icon" />
        <link rel="canonical" href="https://www.anthony-bouillon.fr" />
        <link rel="alternate" href="https://www.anthony-bouillon.fr" hreflang="fr-fr" />
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
        <!-- Contenu -->
        <div class="container">
            <section id="bloc-home">
                <div class="row">
                    <h2 class="center-align">Bonjour à tous !</h2>
                </div>
                <div class="row">
                    <p class="para-index col s11 offset-s1">
                        &nbsp;&nbsp;&nbsp;&nbsp;Ayant obtenu le titre professionnel " <strong class="bold">Développeur-se logiciel TP01280</strong> " de niveau III,
                        <br/>je suis actuellement à la recherche d'un <strong>contrat de professionnalisation</strong> afin de poursuivre ma formation de "<strong class="bold">Concepteur Développeur en Informatique</strong>" de niveau II.<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;J’ai le désir d’apprendre de nouveaux langages et de perfectionner ce que j’ai appris au cours de la formation à <a href="http://formation.novei.fr/" title="Site web de l'école numérique du noyonnais">E2N</a> afin d’acquérir de l’expérience et de mettre en application mes compétences au sein d'une entreprise. 
                        <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;Après votre visite, si mon profil correspond à vos attentes, contactez-moi via le <a href="Contact" title="Lien redirigeant vers un formulaire de contact">formulaire</a> :)
                    </p>
                </div>
            </section>
               </div>
               <div class="container-fluid">
            <div class="row">
                <h3 class=center-align>
                    <span>B</span>
                    <span>I</span>
                    <span>E</span>
                    <span>N</span>
                    <span>V</span>
                    <span>E</span>
                    <span>N</span>
                    <span>U</span>
                    <span>E</span>
                    <span>&nbsp;</span>
                    <span>E</span>
                    <span>T</span>
                    <span>&nbsp;</span>
                    <span>B</span>
                    <span>O</span>
                    <span>N</span>
                    <span>N</span>
                    <span>E</span>
                    <span>&nbsp;</span>
                    <span>V</span>
                    <span>I</span>
                    <span>S</span>
                    <span>I</span>
                    <span>T</span>
                    <span>E</span>
                </h3>
            </div>
        </div>
        <!-- Fin du contenu -->
        <footer>
            <div class="row">
                <!-- Taille du premier bloc -->
                <div class="col s12 m12 l6 offset-l1 xl6 offset-xl1 headshot bloc-footer">
                    <div class="row">
                        <div class="col s12">
                            <h3 class="black-text center-align" id="h3-name">Anthony BOUILLON</h3>
                        </div>
                    </div>
                    <div class="row margin-bottom">
                        <div class="col s1">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                        </div>
                        <div class="col s8">
                            <span class="white-text text-lighten-4 bold para-footer">Haut de france, Oise, Le Plessis-Brion</span>
                        </div>
                        <div class="col s12 m1 offset-m2">
                            <a href="https://github.com/AnthonyBouillon" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Github"><i class="fa fa-github" aria-hidden="true" alt="Logo github"></i></a>
                        </div>
                    </div>
                    <div class="row margin-bottom">
                        <div class="col s1">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="col s8">
                            <span class="white-text text-lighten-4 bold para-footer">anthony-bouillon@outlook.fr</span>
                        </div>
                        <div class="col s12 m1 offset-m2">
                            <a href="https://www.linkedin.com/in/anthony-bouillon-44313a151/" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Linkedin"><i class="fa fa-linkedin" alt="Logo linkedin"></i></a>
                        </div>
                    </div>
                    <div class="row margin-bottom">
                        <div class="col s1">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col s8">
                            <span class="white-text text-lighten-4 bold para-footer">06.49.70.52.50</span>
                        </div>
                        <div class="col s12 m1 offset-m2">
                            <a href="https://twitter.com/_Ant_ho_ny_" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Twitter"><i class="fa fa-twitter" alt="Logo twitter"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Taille du deuxième bloc -->
                <div class="col s12 m4 offset-m1 l2 offset-l1 xl2 offset-xl2 headshot headshot-1 bloc2-footer">
                    <h3 class="white-text center-align" id="h3-info">Information</h3> 
                    <p id="para-counter"><?= $count_views ?><br/><?= $number_visitors ?></p>
                </div>
            </div>
        </footer>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120392400-1" async></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-120392400-1');
        </script>
        <!-- Librairie materialize, le script javascript principale et le second -->
        <script src="Publics/LIB/materialize/js/materialize.min.js" ></script>
        <script src="Publics/JS/main.min.js" async></script>
        <script src="Publics/JS/display-text.min.js" async></script>
    </body>
</html> 