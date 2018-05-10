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
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/2000px-HTML5_logo_and_wordmark.svg.png" alt="HTML5" class="img-comp" />
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
                        <img src="https://humancoders-formations.s3.amazonaws.com/uploads/course/logo/70/thumb_bigger_formation-css3.png" alt="CSS3" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">CSS</p>
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
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYESQ9f-0sYXGuAI8_4Jeb0VZp7oYOssDw3j3ty11n2mnunWd6" alt="JavaScript" class="img-comp"/>
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
                        <img src="http://php.net/images/logos/new-php-logo.svg" alt="HTML5" class="responsive-img img-comp"/>
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
                        <img src="https://www.acuitytraining.co.uk/wp-content/uploads/2015/05/SQL-logo-transparent.png" alt="HTML5" class="img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">SQL AVEC MYSQL</p>
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
                        <img src="data:image/png;base64,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" alt="Bootstrap" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">BOOTSTRAP</p>
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
                        <img src="https://etud.insa-toulouse.fr/~tutorinsa/public/images/materializecss.png" alt="Materialize" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">MATERIALIZE</p>
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
                        <img src="http://raphaelmachiels.com/img/jquery-logo.png" alt="jQuery" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">JQUERY</p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
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
                        <img src="https://cdn.worldvectorlogo.com/logos/linux-tux-2.svg" alt="Linux" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">LINUX</p>
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
                        <img src="https://www.malekal.com/wp-content/uploads/windows-10-logo.png" alt="Windows" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">WINDOWS</p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
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
                        <img src="http://www.zwodnik.com/media/cache/7d/ac/7dac82fd78702aeca1a98b1d1feee42e.png" alt="Netbeans" class="responsive-img img-comp"/>
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
                        <img src="https://blog.juansorroche.com/data/images/113_vscode_logo.png" alt="Visual studio code" class="img-comp"/>
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
                        <img src="https://git-scm.com/images/logos/downloads/Git-Icon-1788C.png" alt="Git" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">GIT</p>
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
                        <img src="https://cdn.portableapps.com/PencilProjectPortable_128.png" alt="Pencil" class="img-comp" />
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">PENCIL</p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
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
                        <img src="https://assets-cdn.github.com/images/modules/logos_page/Octocat.png" alt="Github" class="responsive-img img-comp"/>
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
                        <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/trello-logo-394bc0fd43a5cba5-512x512.png" alt="Trello" class="img-comp"/>
                    </div>
                    <!-- Barre de progression -->
                    <div class="col s8">
                        <p class="center-align">TRELLO</p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
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
                        <img src="http://www.itii-chatellerault.fr/wp-content/uploads/2016/11/diplome-d-ingenieur-itii-chatelerault-2.jpg" alt="Image de diplômés" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p>Obtention du titre professionnel "Développeur logiciel" de niveau III.<br/><br/><em>Chez E2N à Noyon | Campus Inovia</em></p>
                    </div>
                    <div class="card-action">
                        <p>Date de l'obtention : 17/04/2018</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://reseau.ecole-multimedia.com/medias/image/103654877159e8646a58b1f.jpg" alt="Logo officiel d'opquast" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p>Certification des bonnes pratiques <a href="https://certificates.opquast.com/certificate/SVC2I7/">Opquast certified</a> avec 805/1000 points.<br/><br/><em>Chez E2N à Noyon | Campus Inovia</em></p>
                    </div>
                    <div class="card-action">
                        <p>Validité : 08/12/2017 au 08/12/2022</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l12 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://omrconsulting.fr/sites/default/files/formation.png" alt="Image de gens en formation" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p>Formation de développeur web afin de preparer le titre professionnel<br/> « Développeur-se logiciel TP01280 » Niveau III équivalent BAC+2.<br/><br/><em>Chez E2N à Noyon | Campus Inovia</em></p>
                    </div>
                    <div class="card-action">
                        <p>Durée : 09/09/2017 au 06/04/2018, 840 heures</p>
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
                        <img src="http://www.jeanmichelclement.com/wp-content/uploads/2018/03/service-civique-1920x1080.jpg" alt="Image d'un tableau avec comme écriture : service civique" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p>Service civique.<br/><br/><em>Chez le théâtre de l'éveil à Cambrones-les-ribécourt</em></p>
                    </div>
                    <div class="card-action">
                        <p>Durée : 3 mois en 2017</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://www.houston-macdougal.com/wp-content/uploads/2017/12/visiteur-commercial.png" alt="Image de commerciaux" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p>Gestionnaire de la relation client.<br/><br/><em>Chez L'2PHONE à Villers-Saint-Paul</em></p>
                    </div>
                    <div class="card-action">
                        <p>Durée : 7 mois en 2016 </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l12 xl4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://www.mehach-magazine.com/wp-content/uploads/2018/03/c2e01c8f1f87cbd7fbb41676bade9187.jpg" alt="Image d'agent polyvalent du batîment" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <p>Agent polyvalent du batîment.<br/><br/><em>Chez Elan ces à Noyon</em></p>
                    </div>
                    <div class="card-action">
                        <p>Durée : 16 mois en 2013-2015</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin du contenu -->
<?php
include_once 'footer.php';
