<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/c-f-e-controller.php';
$title = 'A voir';
$body = 'body_c-f-e';
include_once 'header.php';
?>
<!-- Contenu -->
<div class="container-fluid">

    <div class="row bloc-comp" id="bloc-1">
        <div class="decorative-title">
            <span>COMPETENCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#bloc-2"><i class="fa fa-arrow-circle-down"></i></a></span>
        </div>

        <div class="col s12 m6" id="bloc1">




            <div class="col s12 title-language">
                <h3>Language</h3>
            </div>

            <div class="col s12 m5 offset-l1 bloc-front-end">
                <div class="col s12">
                    <h4 class="center-align title-front-end">Front-end</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/html" alt="HTML5" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/css" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col s12 m5 bloc-back-end">
                <div class="col s12">
                    <h4 class="center-align  title-back-end">Back-end</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="http://php.net/images/logos/new-php-logo.svg" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://www.acuitytraining.co.uk/wp-content/uploads/2015/05/SQL-logo-transparent.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>                                                
        </div>

        <div class="col s12 m6" id="bloc2">

            <div class="col s12 title-language">
                <h3>Framework / Librairie</h3>
            </div>

            <div class="col s12 m5 offset-l1 bloc-front-end">
                <div class="col s12">
                    <h4 class="center-align title-front-end">Front-end</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/html" alt="HTML5" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/css" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col s5 bloc-back-end">
                <div class="col s12">
                    <h4 class="center-align  title-back-end">Back-end</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="http://php.net/images/logos/new-php-logo.svg" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://www.acuitytraining.co.uk/wp-content/uploads/2015/05/SQL-logo-transparent.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col s6" id="bloc2">

            <div class="col s12 title-language">
                <h3>Environnement</h3>
            </div>

            <div class="col s5 offset-l1 bloc-front-end">
                <div class="col s12">
                    <h4 class="center-align title-front-end">Système d'exploitation</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/html" alt="HTML5" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/css" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col s5 bloc-back-end">
                <div class="col s12">
                    <h4 class="center-align  title-back-end">Editeur de texte</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="http://php.net/images/logos/new-php-logo.svg" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://www.acuitytraining.co.uk/wp-content/uploads/2015/05/SQL-logo-transparent.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s6" id="bloc2">

            <div class="col s12 title-language">
                <h3>Autre</h3>
            </div>

            <div class="col s5 offset-l1 bloc-front-end">
                <div class="col s12">
                    <h4 class="center-align title-front-end">Gestion de version</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/html" alt="HTML5" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <img src="Publics/IMG/icon/css" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col s5 bloc-back-end">
                <div class="col s12">
                    <h4 class="center-align  title-back-end">Outil</h4><hr/><br/><br/>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="http://php.net/images/logos/new-php-logo.svg" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <img src="https://www.acuitytraining.co.uk/wp-content/uploads/2015/05/SQL-logo-transparent.png" alt="CSS3" class="img-comp"/>
                    </div>
                    <div class="col s8">
                        <p>Niveau estimé : </p>
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row bloc-course"  id="bloc-2">
        <div class="decorative-title">
            <span>FORMATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#bloc-3"><i class="fa fa-arrow-circle-down"></i></a> <a href="#bloc-1"><i class="fa fa-arrow-circle-up"></i></a></span>
        </div>
        <div class="row">
            <div class="col s12 m4"> 	
                <div class="card">
                    <div class="card-image">
                        <img src="http://www.itii-chatellerault.fr/wp-content/uploads/2016/11/diplome-d-ingenieur-itii-chatelerault-2.jpg" class="responsive-img">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://reseau.ecole-multimedia.com/medias/image/103654877159e8646a58b1f.jpg" class="responsive-img">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="https://omrconsulting.fr/sites/default/files/formation.png" class="responsive-img">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="row bloc-course"  id="bloc-3">
        <div class="decorative-title">
            <span>EXPERIENCE PROFESSIONNEL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#bloc-2"><i class="fa fa-arrow-circle-up"></i></a></span>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://www.jeanmichelclement.com/wp-content/uploads/2018/03/service-civique-1920x1080.jpg" class="responsive-img">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://www.houston-macdougal.com/wp-content/uploads/2017/12/visiteur-commercial.png" class="responsive-img">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://www.mehach-magazine.com/wp-content/uploads/2018/03/c2e01c8f1f87cbd7fbb41676bade9187.jpg" class="responsive-img">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>


<!-- Fin du contenu -->

<?php
include_once 'footer.php';
