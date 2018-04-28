var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem);

var letexte2 = 'Après avoir cliqué sur "envoyez", je recevrez un e-mail de votre part, et je vous répondrez dès que je l\'aurais lu !';
var letexte = "Informations complémentaires";
var cmpt = 0;
var cmpt2 = 0;

function typewriter() {
    lelien = document.getElementById('lien');
    if (cmpt < letexte.length) {
        courant = lelien.innerHTML.substring(0, lelien.innerHTML.length - 1);
        courant += letexte.charAt(cmpt) + " ";
        lelien.innerHTML = courant;
    }
    cmpt++;
    setTimeout("typewriter()", 80);
}
typewriter();

function typess() {
    lelien2 = document.getElementById('lien2');
    if (cmpt2 < letexte2.length) {
        courant5 = lelien2.innerHTML.substring(0, lelien2.innerHTML.length - 1);
        courant5 += letexte2.charAt(cmpt2) + " ";
        lelien2.innerHTML = courant5;
    }
    cmpt2++;
    setTimeout("typess()", 30);
}
setTimeout(typess, 2500);

/* Formulaire de contact */

// Validation d'un champ
//function validate_name() {
//    input = document.getElementById('name');
//    text = document.getElementById('text_name');
//    if (input.value.length === 0) {
//        text.innerHTML = 'Veuillez remplir ce champ';
//        text.style.color = 'orange';
//    } else if (input.value.length < 1 || input.value.length > 50) {
//        text.innerHTML = 'Veuillez écrire un nom de famille valide';
//        text.style.color = 'red';
//    } else {
//        text.innerHTML = 'Correct';
//        text.style.color = 'green';
//    }
//}


