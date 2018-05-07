<?php

$title = 'Error';
$body = NULL;
include_once '../Views/header.php';
/* Affiche le message d'erreur correspondant, suivant le nombre récupéré dans l'url */
switch ($_GET['error']) {
    case '400':
        echo '<h2 class="text-align">Échec de l\'analyse HTTP.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '403':
        echo '<h2 class="text-align">Requête interdite !</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '404':
        echo '<h2 class="text-align">Page introuvable :(</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '405':
        echo '<h2 class="text-align">Méthode non autorisée.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '500':
        echo '<h2 class="text-align">Erreur interne au serveur ou serveur saturé.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '501':
        echo '<h2 class="text-align">Le serveur ne supporte pas le service demandé.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '502':
        echo '<h2 class="text-align">Mauvaise passerelle.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '503':
        echo '<h2 class="text-align">Service indisponible.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '504':
        echo '<h2 class="text-align">Trop de temps à la réponse.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    case '505':
        echo '<h2 class="text-align">Version HTTP non supportée.</h2><p class="text-align">Vous pouvez continuez à naviguer grâce au menu ci-dessus</p>';
        break;
    default:
        echo 'Erreur !';
}
