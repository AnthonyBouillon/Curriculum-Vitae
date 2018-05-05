<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/visitors-controller.php';
$title = 'Liste de mes projets';
$body = 'body_project';
include_once 'header.php';
?>
<div class="container">
    <h2 class="text-align" id="title_project">Liste de mes projets personnel</h2>
    <table class="spreadsheet">
        <caption>A ce jour le <span id="date"></span><span id="hour"></span> : 3 projets ont était réalisés</caption> 
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
                <td class="first_td"><abbr title="All Plateform Together" lang="en">APT</abbr></td>
                <td class="second_td">Hébergé-><i class="fa fa-times"></i><br/><a href="https://github.com/AnthonyBouillon/projet_professionnel">Répertoire github</a></td>
                <td class="third_td">Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.</td>
                <td class="fourth_td">
                    <h3>Fil d'actualités</h3>
                    <p>- Ajout d'un article<br/>- Affichage des articles<br/>- Modifier un article<br/>- Supprimer un article</p>
                    <h3>Espace membres</h3>
                    <p>- Inscription<br/>- Connexion<br/>- Modification du profil<br/>- Suppression du profil</p>
                    <h3>Tchat</h3>
                    <p>- Envoi de messages<br/>- Affichage des messages</p>
                </td>
                <td class="fifth_td">00/00/0000</td>
            </tr>
            <tr>
                <th scope="row" class="text-align">2</th>
                <td class="first_td">Memento</td>
                <td class="second_td">Hébergé-><a href="https://memento-dev-web.000webhostapp.com/Memento/Html">Site web</a><br/><a href="https://github.com/AnthonyBouillon/Memento">Répertoire github</a></td>
                <td class="third_td">Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.</td>
                <td class="fourth_td">
                    <h3>Notes</h3>
                    <p>- Ajout d'une note<br/>- Affichage des notes<br/>- Rechercher une note<br/>- Modification des notes<br/>- Suppression des notes</p>
                </td>
                <td class="fifth_td">24/04/2018</td>
            </tr>
            <tr>
                <th scope="row" class="text-align">3</th>
                <td class="first_td">CV numérique #1</td>
                <td class="second_td">Hébergé-><a href="https://anthonybouillon.github.io/">Site web</a><br/><a href="https://github.com/AnthonyBouillon/AnthonyBouillon.github.io">Répertoire github</a></td>
                <td class="third_td">Vita est illis semper in fuga uxoresque mercenariae conductae ad tempus ex pacto atque, ut sit species matrimonii, dotis nomine futura coniunx hastam et tabernaculum offert marito, post statum diem si id elegerit discessura, et incredibile est quo ardore apud eos in venerem uterque solvitur sexus.</td>
                <td class="fourth_td text-align"><i class="fa fa-times"></i></td>
                <td class="fifth_td">00/00/0000</td>
            </tr>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php'; ?>