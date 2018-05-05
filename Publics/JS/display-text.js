/* Texte qui apparait, lettre par lettre */
var text1 = "Informations complémentaires";
var text2 = 'Eius populus ab incunabulis primis ad usque pueritiae tempus extremum, quod annis circumcluditur fere trecentis, circummurana pertulit bella, deinde aetatem ingressus adultam post multiplices bellorum aerumnas Alpes transcendit et fretum, in iuvenem erectus et virum ex omni plaga quam orbis ambit inmensus, reportavit laureas et triumphos, iamque vergens in senium et nomine solo aliquotiens vincens ad tranquilliora vitae discessit.';
var cmpt1 = 0;
var cmpt2 = 0;

function typewriter() {
    link = document.getElementById('title_contact');
    if (cmpt1 < text1.length) {
        courant1 = link.innerHTML.substring(0, link.innerHTML.length - 1);
        courant1 += text1.charAt(cmpt1) + " ";
        link.innerHTML = courant1;
    }
    cmpt1++;
    setTimeout("typewriter()", 80);
}
typewriter();

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
setTimeout(typeswriter2, 2500);