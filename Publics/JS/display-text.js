// Texte qui apparait, lettre par lettre

/*
 * On assigne notre texte dans une variable
 * puis on assigne un compteur démarrant a 0 dans une variable
 */
var text1 = "Informations complémentaires";
var text2 = 'N\'hésitez pas à me contacter, quelle que soit la raison, vous obtiendrez une réponse dans les plus brefs délais.';
var text_para_contact1 = 'Mes coordonnées';
var text_para_contact2 = 'Région : Haut de france';
var text_para_contact3 = 'Ville : Le Plessis-Brion';
var text_para_contact4 = 'Code postal : 60150';
var text_para_contact5 = 'E-mail : anthony-bouillon@outlook.fr';
var text_para_contact6 = 'Numéro : 06.49.70.52.50';
var cmpt1 = 0;
var cmpt2 = 0;
var cmpt3 = 0;
var cmpt4 = 0;
var cmpt5 = 0;
var cmpt6 = 0;
var cmpt7 = 0;
var cmpt8 = 0;

/*
 * Dans notre fonction,
 * on récupère l'id de notre titre et on l'assigne dans une variable
 * si le nombre de caractère dans notre titre est inférieur à notre compteur
 * on affiche la première chaîne de caractère
 * puis on incrémente notre compteur pour les autres lettres de notre chaîne
 */
if (document.getElementById('title_contact') != null) {
    function typewriter1() {
        link = document.getElementById('title_contact');
        if (cmpt1 < text1.length) {
            courant1 = link.innerHTML.substring(0, link.innerHTML.length - 1);
            courant1 += text1.charAt(cmpt1) + " ";
            link.innerHTML = courant1;
        }
        cmpt1++;
        // Permet de régler la vitesse de l'execution du script
        setTimeout("typewriter1()", 80);
    }
    typewriter1()
}
/*
 * Même chose que la première fonction
 */
if (document.getElementById('para_contact') != null) {
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
}
/*
 * Même chose que la première fonction
 */
if (document.getElementById('para_contact1') != null) {
    function typeswriter3() {
        id_para_contact1 = document.getElementById('para_contact1');

        if (cmpt3 < text_para_contact1.length) {
            courant3 = id_para_contact1.innerHTML.substring(0, id_para_contact1.innerHTML.length - 1);
            courant3 += text_para_contact1.charAt(cmpt3) + " ";
            id_para_contact1.innerHTML = courant3;
        }
        cmpt3++;
        setTimeout("typeswriter3()", 30);
    }
    setTimeout(typeswriter3, 6000);
}
if (document.getElementById('para_contact2') != null) {
    function typeswriter4() {
        id_para_contact2 = document.getElementById('para_contact2');

        if (cmpt4 < text_para_contact2.length) {
            courant4 = id_para_contact2.innerHTML.substring(0, id_para_contact2.innerHTML.length - 1);
            courant4 += text_para_contact2.charAt(cmpt4) + " ";
            id_para_contact2.innerHTML = courant4;
        }
        cmpt4++;
        setTimeout("typeswriter4()", 30);
    }
    setTimeout(typeswriter4, 7000);
}
if (document.getElementById('para_contact3') != null) {
    function typeswriter5() {
        id_para_contact3 = document.getElementById('para_contact3');

        if (cmpt5 < text_para_contact3.length) {
            courant5 = id_para_contact3.innerHTML.substring(0, id_para_contact3.innerHTML.length - 1);
            courant5 += text_para_contact3.charAt(cmpt5) + " ";
            id_para_contact3.innerHTML = courant5;
        }
        cmpt5++;
        setTimeout("typeswriter5()", 30);
    }
    setTimeout(typeswriter5, 7000);
}
if (document.getElementById('para_contact4') != null) {
    function typeswriter6() {
        id_para_contact4 = document.getElementById('para_contact4');

        if (cmpt6 < text_para_contact4.length) {
            courant6 = id_para_contact4.innerHTML.substring(0, id_para_contact4.innerHTML.length - 1);
            courant6 += text_para_contact4.charAt(cmpt6) + " ";
            id_para_contact4.innerHTML = courant6;
        }
        cmpt6++;
        setTimeout("typeswriter6()", 30);
    }
    setTimeout(typeswriter6, 7000);
}
if (document.getElementById('para_contact5') != null) {
    function typeswriter7() {
        id_para_contact5 = document.getElementById('para_contact5');

        if (cmpt8 < text_para_contact5.length) {
            courant7 = id_para_contact5.innerHTML.substring(0, id_para_contact5.innerHTML.length - 1);
            courant7 += text_para_contact5.charAt(cmpt8) + " ";
            id_para_contact5.innerHTML = courant7;
        }
        cmpt8++;
        setTimeout("typeswriter7()", 30);
    }
    setTimeout(typeswriter7, 7000);
}
if (document.getElementById('para_contact6') != null) {
    function typeswriter8() {
        id_para_contact6 = document.getElementById('para_contact6');

        if (cmpt7 < text_para_contact6.length) {
            courant8 = id_para_contact6.innerHTML.substring(0, id_para_contact6.innerHTML.length - 1);
            courant8 += text_para_contact6.charAt(cmpt7) + " ";
            id_para_contact6.innerHTML = courant8;
        }
        cmpt7++;
        setTimeout("typeswriter8()", 30);
    }
    setTimeout(typeswriter8, 7000);
}