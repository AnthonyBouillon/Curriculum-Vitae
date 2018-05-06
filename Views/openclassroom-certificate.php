<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/certificate-controller.php';
$title = 'Certificat d\'openclassroom';
$body = 'body_openclassroom-certificate';
include_once 'header.php';
?>
<div class="container">
    <h2 class="text-align h2_page-certificate">Liste des certificats obtenus sur le site d'openclassroom</h2>

    <div class="row">

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://course.oc-static.com/courses/1946386/1946386_teaser_picture_1525521657.jpg">
                </div>
                <div class="card-content">
                    <p class="bold">Comprendre le web<br/><br/></p>
                </div>
                <div class="card-action">
                    <a href="https://openclassrooms.com/course-certificates/4624421369">Certificat d'openclassroom</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://course.oc-static.com/courses/4057661/4057661_teaser_picture_1522250852.jpg">
                </div>
                <div class="card-content">
                    <p class="bold">Maintenez-vous à jour en développement</p>
                </div>
                <div class="card-action">
                    <a href="https://openclassrooms.com/course-certificates/4125755371">Certificat d'openclassroom</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://course.oc-static.com/courses/1603881/1603881_teaser_picture_1522246725.jpg">
                </div>
                <div class="card-content">
                    <p class="bold">Apprenez à créer votre site web avec HTML5 et CSS3</p>
                </div>
                <div class="card-action">
                    <a href="https://openclassrooms.com/course-certificates/2914070235">Certificat d'openclassroom</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://course.oc-static.com/courses/918836/918836_teaser_picture_1522246956.jpg">
                </div>
                <div class="card-content">
                    <p class="bold">Concevez votre site web avec PHP et MySQL </p>
                </div>
                <div class="card-action">
                    <a href="https://openclassrooms.com/course-certificates/7087330723">Certificat d'openclassroom</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/courses/3013691/14460490348045_illu_decouverte%20des%20CMS.png">
                </div>
                <div class="card-content">
                    <p class="bold">Découvrez les solutions CMS<br/><br/></p>
                </div>
                <div class="card-action">
                    <a href="https://openclassrooms.com/course-certificates/3701379797">Certificat d'openclassroom</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="https://static.oc-static.com/prod/courses/illustrations/illu_protegez-l-ensemble-de-vos-donnees-sur-votre-ordinateur.png">
                </div>
                <div class="card-content">
                    <p class="bold">Protégez l’ensemble de vos données sur votre ordinateur</p>
                </div>
                <div class="card-action">
                    <a href="https://openclassrooms.com/course-certificates/3263356696">Certificat d'openclassroom</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include_once 'footer.php';
