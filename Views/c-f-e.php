<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/c-f-e-controller.php';
$title = 'Compétences | Formation | Expériences';
$body = 'body_c-f-e';
include_once 'header.php';
?>
<!-- Contenu -->
<div class="container-fluid">
    <!-- Début du bloc-competence -->
    <div class="row" id="bloc-competence">
        <!-- Titre du bloc -->
        <div class="decorative-title">
            <h2 id="title-competence" class="">COMPETENCE</h2>
        </div>
        <!-- Sous bloc language -->
        <div class="col s12 m12 l12 xl6">
            <!-- Sous-titre de la catégorie language -->
            <div class="col s12 title-language">
                <h3>Langage</h3>
            </div>
            <!-- Début du bloc front-end -->
            <div class="col s12 m12 l5 offset-l1 xl5 offset-xl1 bloc-front-end">
                <!-- Titre du bloc front-end -->
                <div class="col s12">
                    <h4 class="center-align title-front-end">Front-end</h4><hr/><br/><br/>
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/html.png" alt="HTML5" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">HTML</p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/css.png" alt="CSS3" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">CSS</p>
                        <div class="progress">
                            <div class="determinate" style="width: 60%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/js.png" alt="JavaScript" class="img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">JAVASCRIPT</p>
                        <div class="progress">
                            <div class="determinate" style="width: 10%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
            </div>
            <!-- Fin du bloc front-end -->
            <!-- Début du bloc back-end -->
            <div class="col s12 m12 l5 xl5 bloc-back-end">
                <!-- Titre du bloc back-end -->
                <div class="col s12">
                    <h4 class="center-align title-back-end">Back-end</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/php.svg" alt="PHP" class="img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">PHP</p>
                        <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/sql.png" alt="SQL" class="img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">SQL AVEC MYSQL</p>
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
                <!-- Fin du bloc back-end -->   
            </div>
            <!-- Fin du sous-bloc language -->                               
        </div>
        <!-- Bloc framework et librairie -->
        <!-- Sous bloc language -->
        <div class="col s12 m12 l12 xl6">
            <!-- Sous-titre de la catégorie language -->
            <div class="col s12 title-language">
                <h3>Framework et librairie</h3>
            </div>
            <!-- Début du bloc front-end -->
            <div class="col s12 m12 l5 offset-l1 xl5 offset-xl1 bloc-front-end">
                <!-- Titre du bloc front-end -->
                <div class="col s12">
                    <h4 class="center-align title-front-end">Front-end</h4><hr/><br/><br/>
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/bootstrap.png" alt="Bootstrap" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">BOOTSTRAP</p>
                        <div class="progress">
                            <div class="determinate" style="width: 60%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/materialize.png" alt="Materialize" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">MATERIALIZE</p>
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/jquery.png" alt="jQuery" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">JQUERY</p>
                        <div class="progress">
                            <div class="determinate" style="width: 10%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
            </div>
            <!-- Fin du bloc front-end -->
            <!-- Début du bloc back-end -->
            <div class="col s12 m12 l5 xl5 bloc-back-end">
                <!-- Titre du bloc back-end -->
                <div class="col s12">
                    <h4 class="center-align title-back-end">Back-end</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align"></p>
                        <div class="">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align"></p>
                        <div class="">
                            <div></div>
                        </div>
                    </div>
                </div>
                <!-- Fin du bloc back-end -->   
            </div>
            <!-- Fin du sous-bloc language -->                               
            <!-- Fin du bloc framework et librairie -->
            <!-- Fin du bloc-competence -->
        </div>
        <!-- Sous bloc language -->
        <div class="col s12 m12 l12 xl6">
            <!-- Sous-titre de la catégorie language -->
            <div class="col s12 title-language">
                <h3>Environnement de travail</h3>
            </div>
            <!-- Début du bloc front-end -->
            <div class="col s12 m12 l5 offset-l1 xl5 offset-xl1 bloc-front-end">
                <!-- Titre du bloc front-end -->
                <div class="col s12">
                    <h4 class="center-align title-front-end">Système d'exploitation</h4><hr/><br/><br/>
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/linux.svg" alt="Linux" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">LINUX</p>
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/windows.png" alt="Windows" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">WINDOWS</p>
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
            </div>
            <!-- Fin du bloc front-end -->
            <!-- Début du bloc back-end -->
            <div class="col s12 m12 l5 xl5 bloc-back-end">
                <!-- Titre du bloc back-end -->
                <div class="col s12">
                    <h4 class="center-align title-back-end">Editeur de texte</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/netbeans.png" alt="Netbeans" class="responsive-img img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">NETBEANS</p>
                        <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/vs-code.png" alt="Visual studio code" class="img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">VISUAL STUDIO CODE</p>
                        <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
                <!-- Fin du bloc back-end -->   
            </div>
            <!-- Fin du sous-bloc language -->                               
        </div>
        <!-- Bloc framework et librairie -->
        <!-- Sous bloc language -->
        <div class="col s12 m12 l12 xl6">
            <!-- Sous-titre de la catégorie language -->
            <div class="col s12 title-language">
                <h3>Autre</h3>
            </div>
            <!-- Début du bloc front-end -->
            <div class="col s12 m12 l5 offset-l1 xl5 offset-xl1 bloc-front-end">
                <!-- Titre du bloc front-end -->
                <div class="col s12">
                    <h4 class="center-align title-front-end">Outil</h4><hr/><br/><br/>
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/git.png" alt="Git" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">GIT</p>
                        <div class="progress">
                            <div class="determinate" style="width: 60%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
                <!-- bloc d'une compétence -->
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/pencil.png" alt="Pencil" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">PENCIL</p>
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                    <!-- Fin d'un bloc contenant une compétence -->
                </div>
            </div>
            <!-- Fin du bloc front-end -->
            <!-- Début du bloc back-end -->
            <div class="col s12 m12 l5 xl5 bloc-back-end">
                <!-- Titre du bloc back-end -->
                <div class="col s12">
                    <h4 class="center-align title-back-end">Site web</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/github.png" alt="Github" class="responsive-img img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">GITHUB</p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- bloc image -->
                    <div class="col s4">
                        <img src="Publics/IMG/icon/trello.png" alt="Trello" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">TRELLO</p>
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
                <!-- Fin du bloc back-end -->   
            </div>
            <!-- Fin du sous-bloc language -->                               
            <!-- Fin du bloc framework et librairie -->
            <!-- Fin du bloc-competence -->
        </div>
    </div>
    <div class="row">
        <div class="decorative-title">
            <h2 class="center-align" id="title-course">FORMATION</h2>
        </div>
        <div class="row bloc-course">
            <div class="col s12 m12 l6 xl4"> 	
                <div class="card">
                    <div class="card-image">
                        <img src="Publics/IMG/icon/diplome.jpg" alt="Image de diplômés" class="responsive-img" />
                    </div>
                    <div class="card-content">
                        <p class="bold">Obtention du titre professionnel "Développeur logiciel" de niveau III.<br/><br/><em>Chez E2N à Noyon | Campus Inovia</em></p>
                    </div>
                    <div class="card-action">
                        <p class="bold">Date de l'obtention : 17/04/2018</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="Publics/IMG/icon/certificate.jpg" alt="Logo officiel d'opquast" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p class="bold">Obtention du certificat <a href="https://certificates.opquast.com/certificate/SVC2I7/">Opquast certified</a> avec 805/1000 points.<br/><br/><em>Chez E2N à Noyon | Campus Inovia</em></p>
                    </div>
                    <div class="card-action">
                        <p class="bold">Validité : 08/12/2017 au 08/12/2022</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l12 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="Publics/IMG/icon/course.png" alt="Image de gens en formation" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p class="bold">Formation de développeur web afin de preparer le titre professionnel<br/> « Développeur-se logiciel TP01280 » Niveau III équivalent BAC+2.<br/><br/><em>Chez E2N à Noyon | Campus Inovia</em></p>
                    </div>
                    <div class="card-action">
                        <p class="bold">Durée : 09/09/2017 au 06/04/2018, 840 heures</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bloc-exp"  id="bloc-3">
        <div class="decorative-title">
            <h2 id="title-exp">EXPERIENCE PROFESSIONNELLE</h2>
        </div>
        <div class="row">
            <div class="col s12 m6 l6 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="Publics/IMG/icon/sv.jpg" alt="Image d'un tableau avec comme écriture : service civique" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p class="bold">Service civique.<br/><br/><em>Chez le théâtre de l'éveil à Cambrones-les-ribécourt</em></p>
                    </div>
                    <div class="card-action">
                        <p class="bold">Durée : 3 mois en 2017</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="Publics/IMG/icon/trade.png" alt="Image de commerciaux" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p class="bold">Gestionnaire de la relation client.<br/><br/><em>Chez L'2PHONE à Villers-Saint-Paul</em></p>
                    </div>
                    <div class="card-action">
                        <p class="bold">Durée : 7 mois en 2016 </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l12 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="Publics/IMG/icon/building.jpg" alt="Image d'agent polyvalent du batîment" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p class="bold">Agent polyvalent du batîment.<br/><br/><em>Chez Elan ces à Noyon</em></p>
                    </div>
                    <div class="card-action">
                        <p class="bold">Durée : 16 mois en 2013-2015</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br/>
<!-- Fin du contenu -->
<?php
include_once 'footer.php';
 