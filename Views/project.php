<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/project-controller.php';
$title = 'Liste de mes projets';
$body = 'body_project';
include_once 'header.php';
?>
<div class="container">
    <h2 class="text-align" id="title_project">Liste de mes projets personnels</h2>
    <table class="spreadsheet">
        <caption>A ce jour le <span id="date"></span><span id="hour"></span> : 3 projets ont était réalisés</caption> 
        <thead>
            <tr>
                <th class="text-align number_th" id="#">#</th>
                <th id="first_th">Nom</th>
                <th>Lien</th>
                <th>Description</th>
                <th id="fourth_th">Fonctionnalités</th>
                <th id="fifth_th">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr onmouseover="mouseover1()" onmouseout="mouseout1()">
                <th scope="row" class="text-align number_th">1</th> 
                <td class="first_td"><abbr title="All Plateform Together" lang="en">APT</abbr></td>
                <td class="second_td">Hébergé-><i class="fa fa-times" title="Projet non hébergé" alt="Projet non hébergé"></i><br/><a href="https://github.com/AnthonyBouillon/projet_professionnel" class="bold" id="link_project_1" title="Répertoire sur github">Répertoire github</a></td>
                <td class="third_td">
                    &nbsp;&nbsp;&nbsp;&nbsp;Ce projet a était conçu dans le cadre de l'examen final pour l'obtention du titre professionnel.<br/>&nbsp;&nbsp;&nbsp;&nbsp;L'objectif était de : Développer une application client-serveur et une application web complète (CRUD). J'ai donc utilisé HTML/CSS et le JavaScript pour le coté client et le PHP et SQL pour le coté serveur avec la base de données MySQL.
                </td>
                <td class="fourth_td">
                    <p class="text-left">Espace membres</p>
                    <p class="text-left">Fil d'actualités</p>
                    <p class="text-left">Tchat</p>
                    <p class="text-left">Forum</p>
                </td>
                <td class="fifth_td">17/04/2018</td>
            </tr>
            <tr onmouseover="mouseover2()" onmouseout="mouseout2()">
                <th scope="row" class="text-align number_th">2</th>
                <td class="first_td">Mémento</td>
                <td class="second_td">Hébergé-><a href="https://memento-dev-web.000webhostapp.com/Memento/Html" class="bold" id="link_project_2" title="Redirection vers un site web">Site web</a><br/><a href="https://github.com/AnthonyBouillon/Memento" class="bold" id="link_project_3" title="Répertoire sur github">Répertoire github</a></td>
                <td class="third_td">
                    &nbsp;&nbsp;&nbsp;&nbsp;Ce mémento a était créé, car j'ai l'habitude de créer des notes sur mon bureau. Malgré l'ordonnancement et l'organisation de mes notes, à la longue, ça créées un <abbr title="Vient du latin, synonyme de bazard">cafaro hom</abbr>.<br/>&nbsp;&nbsp;&nbsp;&nbsp;C'est pour cette raison que le gestionnaire de note en ligne qui permet :  d'<span class="bold">ajouter</span>, <span class="bold">modifier</span>, <span class="bold">supprimer</span> et <span class="bold">ranger</span> des notes dans leurs catégories a était créé.

                </td>
                <td class="fourth_td">
                    <p class="text-align">Gestions de notes</p>
                </td>
                <td class="fifth_td">28/12/2017</td>
            </tr>
            <tr onmouseover="mouseover3()" onmouseout="mouseout3()">
                <th scope="row" class="text-align number_th">3</th>
                <td class="first_td">CV numérique #1</td>
                <td class="second_td">Hébergé-><a href="https://anthonybouillon.github.io/" class="bold" id="link_project_4" title="Redirection vers un site web">Site web</a><br/><a href="https://github.com/AnthonyBouillon/AnthonyBouillon.github.io" class="bold" id="link_project_5" title="Répertoire sur github">Répertoire github</a></td>
                <td class="third_td">&nbsp;&nbsp;Ce CV numérique a était conçu dans le cadre d'un exercice lors de la formation, dont l'objectif était qu'il soit responsive pour tout support, à l'aide du framework bootstrap. </td>
                <td class="fourth_td text-align"><i class="fa fa-times" title="Projet non hébergé" alt="Projet non hébergé"></i></td>
                <td class="fifth_td">26/10/2017</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include_once 'footer.php';
