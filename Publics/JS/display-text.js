// Texte qui apparait, lettre par lettre

/*
 * On assigne notre texte dans une variable
 * puis on assigne un compteur démarrant a 0 dans une variable
 */
var text1 = "Informations complémentaires";
var text2 = 'Eius populus ab incunabulis primis ad usque pueritiae tempus extremum, quod annis circumcluditur fere trecentis, circummurana pertulit bella, deinde aetatem ingressus adultam post multiplices bellorum aerumnas Alpes transcendit et fretum, in iuvenem erectus et virum ex omni plaga quam orbis ambit inmensus, reportavit laureas et triumphos, iamque vergens in senium et nomine solo aliquotiens vincens ad tranquilliora vitae discessit.';
var cmpt1 = 0;
var cmpt2 = 0;
/*
 * Dans notre fonction,
 * on récupère l'id de notre titre et on l'assigne dans une variable
 * si le nombre de caractère dans notre titre est inférieur à notre compteur
 * on affiche la première chaîne de caractère
 * puis on incrémente notre compteur pour les autres lettres de notre chaîne
 */
function typewriter() {
    link = document.getElementById('title_contact');
    if (cmpt1 < text1.length) {
        courant1 = link.innerHTML.substring(0, link.innerHTML.length - 1);
        courant1 += text1.charAt(cmpt1) + " ";
        link.innerHTML = courant1;
    }
    cmpt1++;
    // Permet de régler la vitesse de l'execution du script
    setTimeout("typewriter()", 80);
}
typewriter();
/*
 * Même chose que la première fonction
 */
function typeswriter2() {
    link2 = document.getElementById('para_contact');
    if (cmpt2 < text2.length) {
        courant2 = link2.innerHTML.substring(0, link2.innerHTML.length - 1);
        courant2 += text2.charAt(cmpt2) + " ";
        link2.innerHTML = courant2;
    }
    cmpt2++;
    setTimeout("typeswriter2()", 30);
}
// La fonction démarre au bout de 2.5 secondes
setTimeout(typeswriter2, 2500);