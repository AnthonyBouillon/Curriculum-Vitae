<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/visitors-controller.php';
$title = 'Liste de mes projets';
$body = 'body_project';
include_once 'header.php';
?>
<div class="container">
    <h2 class="text-align">Liste de mes projets personnel</h2>
    <table class="spreadsheet">
        <caption>A ce jour : 3 projets</caption>
        <thead>
            <tr>
                <th class="text-align">#</th>
                <th>Nom</th>
                <th>Lien</th>
                <th>Description</th>
                <th>Fonctionnalités</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-align">1</th> 
                <td><abbr title="All Plateform Together" lang="en">APT</abbr></td>
                <td>Projet non hébergé-><i class="fa fa-times"></i><br/>Code source-><a href="https://github.com/AnthonyBouillon/projet_professionnel">Répertoire github</a></td>
                <td>8 GB</td>
                <td>12 GB</td>
                <td>12 GB</td>
            </tr>
            <tr>
                <th scope="row" class="text-align">2</th>
                <td>Memento</td>
                <td>Projet hebergé-><a href="https://memento-dev-web.000webhostapp.com/Memento/Html">Site web</a><br/>Code source-><a href="https://github.com/AnthonyBouillon/Memento">Répertoire github</a></td>
                <td>75 GB</td>
                <td>100 GB</td>
                <td>100 GB</td>
            </tr>
            <tr>
                <th scope="row" class="text-align">3</th>
                <td>CV numérique #1</td>
                <td>Projet hebergé-><a href="https://anthonybouillon.github.io/">Site web</a><br/>Code source-><a href="https://github.com/AnthonyBouillon/AnthonyBouillon.github.io">Répertoire github</a></td>
                <td>3</td>
                <td>10</td>
                <td>10</td>
            </tr>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php'; ?>