<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/certificate-controller.php';
$title = 'Certificat d\'openclassroom';
$body = 'body_openclassroom-certificate';
include_once 'header.php';
?>
        <div class="container">
            <!-- Titre de la page -->
            <h2 class="center-align" id="h2-certificate">Liste des certificats obtenus sur le site d'openclassroom</h2>
            <div class="row">
                <!-- Taille de la Carte -->
                <div class="col s12 m6 l6 xl3">
                    <!-- design de la carte -->
                    <div class="card">
                        <!-- bloc image -->
                        <div class="card-image">
                            <img src="Publics/IMG/certificate/certificate-1.jpg" alt="Image du cours, correspondant au certificat" />
                        </div>
                        <!-- bloc titre du certificat -->
                        <div class="card-content">
                            <p class="bold">Comprendre le web<br/><br/></p>
                        </div>
                        <!-- bloc lien du certificat -->
                        <div class="card-action">
                            <a href="Publics/IMG/certificate/certificate-link-1.pdf" title="Lien redirigeant vers le certificat au format PDF">Certificat d'openclassroom</a>
                        </div>
                    </div>
                </div>
                <!-- Taille de la Carte -->
                <div class="col s12 m6 l6 xl3">
                    <!-- design de la carte -->
                    <div class="card">
                        <!-- bloc image -->
                        <div class="card-image">
                            <img src="Publics/IMG/certificate/certificate-2.jpg" alt="Image du cours, correspondant au certificat" />
                        </div>
                        <!-- bloc titre du certificat -->
                        <div class="card-content">
                            <p class="bold">Maintenez-vous à jour en développement</p>
                        </div>
                        <!-- bloc lien du certificat -->
                        <div class="card-action">
                            <a href="Publics/IMG/certificate/certificate-link-2.pdf" title="Lien redirigeant vers le certificat au format PDF">Certificat d'openclassroom</a>
                        </div>
                    </div>
                </div>
                <!-- Taille de la Carte -->
                <div class="col s12 m6 l6 xl3">
                    <!-- design de la carte -->
                    <div class="card">
                        <!-- bloc image -->
                        <div class="card-image">
                            <img src="Publics/IMG/certificate/certificate-3.jpg" alt="Image du cours, correspondant au certificat" />
                        </div>
                        <!-- bloc titre du certificat -->
                        <div class="card-content">
                            <p class="bold">Apprenez à créer votre site web avec HTML5 et CSS3</p>
                        </div>
                        <!-- bloc lien du certificat -->
                        <div class="card-action">
                            <a href="Publics/IMG/certificate/certificate-link-3.pdf" title="Lien redirigeant vers le certificat au format PDF">Certificat d'openclassroom</a>
                        </div>
                    </div>
                </div>
                <!-- Taille de la Carte -->
                <div class="col s12 m6 l6 xl3">
                    <!-- design de la carte -->
                    <div class="card">
                        <!-- bloc image -->
                        <div class="card-image">
                            <img src="Publics/IMG/certificate/certificate-4.jpg" alt="Image du cours, correspondant au certificat" />
                        </div>
                        <!-- bloc titre du certificat -->
                        <div class="card-content">
                            <p class="bold">Concevez votre site web avec PHP et MySQL </p>
                        </div>
                        <!-- bloc lien du certificat -->
                        <div class="card-action">
                            <a href="Publics/IMG/certificate/certificate-link-4.pdf" title="Lien redirigeant vers le certificat au format PDF">Certificat d'openclassroom</a>
                        </div>
                    </div>
                </div>
                <!-- Taille de la Carte -->
                <div class="col s12 m6 l6 xl3">
                    <!-- design de la carte -->
                    <div class="card">
                        <!-- bloc image -->
                        <div class="card-image">
                            <img src="Publics/IMG/certificate/certificate-5.png" alt="Image du cours, correspondant au certificat" />
                        </div>
                        <!-- bloc titre du certificat -->
                        <div class="card-content">
                            <p class="bold">Découvrez les solutions CMS<br/><br/></p>
                        </div>
                        <!-- bloc lien du certificat -->
                        <div class="card-action">
                            <a href="Publics/IMG/certificate/certificate-link-5.pdf" title="Lien redirigeant vers le certificat au format PDF">Certificat d'openclassroom</a>
                        </div>
                    </div>
                </div>
                <!-- Taille de la Carte -->
                <div class="col s12 m6 l6 xl3">
                    <!-- design de la carte -->
                    <div class="card">
                        <!-- bloc image -->
                        <div class="card-image">
                            <img src="Publics/IMG/certificate/certificate-6.png" alt="Image du cours, correspondant au certificat" />
                        </div>
                        <!-- bloc titre du certificat -->
                        <div class="card-content">
                            <p class="bold">Protégez l’ensemble de vos données sur votre ordinateur</p>
                        </div>
                        <!-- bloc lien du certificat -->
                        <div class="card-action">
                            <a href="Publics/IMG/certificate/certificate-link-6.pdf" title="Lien redirigeant vers le certificat au format PDF">Certificat d'openclassroom</a>
                        </div>
                    </div>
                </div>
                <!-- </div> row -->
            </div>
            <!-- </div> container -->
        </div>
<?php
include_once 'footer.php';
