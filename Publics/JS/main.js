/* Menu, Materialize */
var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem);
var elem = document.querySelector('.dropdown-trigger');
var instance = M.Dropdown.init(elem);

// Affiche l'heure complète qui sera affiché dans la page project
// On récupère et on assigne notre id dans une variable
if (document.getElementById('hour') != null) {
    var id_hour = document.getElementById('hour');

    function actualiser() {
        /* On instancie notre objet Date qui nous permet de récupéré grâce aux fonction de l'objet, l'heure complète ou la date */
        var date = new Date();
        /* On récupère l'heure */
        var hour = date.getHours();
        /* On récupère les minutes, mais si les minutes sont inférieur à 10, on ajoute un 0 devant (14h5min = 14h05min) */
        var minutes = ':' + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes();
        /* Pareil pour les secondes */
        var seconds = ':' + (date.getSeconds() < 10 ? '0' : '') + date.getSeconds();
        // On affiche le résultat entre les balises qui contientt l'id "hour"
        id_hour.innerHTML = hour + minutes + seconds;
    }
    // La fonction s'actualise dès que possible
    setInterval(actualiser, 0);
}




/* Affichage la date complète qui seraa affiché dans la page project */
// On récupère et on assigne notre id dans une variable
if (document.getElementById('hour') != null) {
    var id_date = document.getElementById('date');
    // On instancie l'objet Date() dans une variable
    var now = new Date();
    // Cette fonction permet de retourner le jour du mois 
    var simple_day = now.getDate();
    // On stipule que si la date du jour est inférieur à 10, on ajoute un 0 devant (5 = 05)
    var condition = now.getDate() < 10 ? '0' : '';
    // On ajoute notre condition au jour du mois
    var day = condition + simple_day;
    // Cette fonction permet de retourner le mois courant, mais il commence à 0, donc on ajoute +1
    var simple_month = now.getMonth() + 1;
    // Même condition que la précédente
    var condition = now.getMonth() < 10 ? '0' : '';
    var month = condition + simple_month;
    // Cette fonction permet de récupérer l'année courante en entier
    var year = now.getFullYear();
    // A l'affichage on assigne le jour, le mois et l'année courante
    id_date.innerHTML = day + "/" + month + "/" + year + " à ";
}


/* Formulaire de contact */
function validate_Form() {
    // On récupère l'id de nos champs dans nos variable
    var name = document.getElementById('name');
    var first_name = document.getElementById('first_name');
    var mail = document.getElementById('mail');
    var subject = document.getElementById('subject');
    var text = document.getElementById('text');
    // On assigne un tableau pour les messages d'erreurs et de succès
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    // On récupèère et on assigne l'id de nos <span>Mon message d'erreur ou de succès</span>
    error[0] = document.getElementById('msg_name');
    error[1] = document.getElementById('msg_first_name');
    error[2] = document.getElementById('msg_mail');
    error[3] = document.getElementById('msg_subject');
    error[4] = document.getElementById('msg_message');

    success[0] = document.getElementById('msg_name');
    success[1] = document.getElementById('msg_first_name');
    success[2] = document.getElementById('msg_mail');
    success[3] = document.getElementById('msg_subject');
    success[4] = document.getElementById('msg_message');
    /*
     * Si le champ est vide,
     * on affiche erreur et on colore le message en rouge
     * sinon,
     * on affiche correct et on colore le message en vert
     */
    if (name.value === '') {
        error[0].innerHTML = 'Veuillez remplir ce champ.';
        error[0].style.color = 'red';
    }
    if (first_name.value === '') {
        error[1].innerHTML = 'Veuillez remplir ce champ.';
        error[1].style.color = 'red';
    }
    if (mail.value === '') {
        error[2].innerHTML = 'Veuillez remplir ce champ.';
        error[2].style.color = 'red';
    }
    if (subject.value === '') {
        error[3].innerHTML = 'Veuillez remplir ce champ.';
        error[3].style.color = 'red';
    }
    if (text.value === '') {
        error[4].innerHTML = 'Veuillez remplir ce champ.';
        error[4].style.color = 'red';
    }
    /* Si les champs ne sont pas vide,
     * return true = le champ peut être soumis
     * sinon,
     * return false = le champ ne peut pas être soumis et l'envoi du formulaire est bloqué
     */
    if (name.value != '' && first_name.value != '' && mail.value != '' && subject.value != '' && text.value != '') {
        return true;
    } else {
        return false;
    }
}
/* La fonction ce déclenche quand le champ n'a plus le focus,
 * On vérifie que les champs ne sont pas vide
 */
function form_name() {
    var name = document.getElementById('name');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[0] = document.getElementById('msg_name');
    error[0] = document.getElementById('msg_name');
    if (name.value === '') {
        error[0].innerHTML = 'Veuillez remplir ce champ.';
        error[0].style.color = 'red';
    } else {
        success[0].innerHTML = 'Correct.';
        success[0].style.color = 'green';
    }
}

function form_first_name() {
    var first_name = document.getElementById('first_name');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[1] = document.getElementById('msg_first_name');
    error[1] = document.getElementById('msg_first_name');
    if (first_name.value === '') {
        error[1].innerHTML = 'Veuillez remplir ce champ.';
        error[1].style.color = 'red';
    } else {
        success[1].innerHTML = 'Correct.';
        success[1].style.color = 'green';
    }
}

function form_mail() {
    var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
    var mail = document.getElementById('mail');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[2] = document.getElementById('msg_mail');
    error[2] = document.getElementById('msg_mail');
    if (mail.value != '') {
        if (expressionReguliere.test(mail.value)) {
            success[2].innerHTML = 'Mail valide.';
            success[2].style.color = 'green';
        } else {
            error[2].innerHTML = 'Mail invalide.';
            error[2].style.color = 'red';
        }
    } else {
        error[2].innerHTML = 'Veuillez remplir ce champ.';
        error[2].style.color = 'red';
    }
}

function form_subject() {
    var subject = document.getElementById('subject');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[3] = document.getElementById('msg_subject');
    error[3] = document.getElementById('msg_subject');
    if (subject.value === '') {
        error[3].innerHTML = 'Veuillez remplir ce champ.';
        error[3].style.color = 'red';
    } else {
        success[3].innerHTML = 'Correct.';
        success[3].style.color = 'green';
    }
}

function form_text() {
    var text = document.getElementById('text');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[4] = document.getElementById('msg_message');
    error[4] = document.getElementById('msg_message');
    if (text.value === '') {
        error[4].innerHTML = 'Veuillez remplir ce champ.';
        error[4].style.color = 'red';
    } else {
        success[4].innerHTML = 'Correct.';
        success[4].style.color = 'green';
    }
}
/* Change la couleur des liens dans le tableau de la page project */
// onmouseover
function mouseover1() {
    document.getElementById('link_project_1').style.color = "#ffd8a6";
}

function mouseover2() {
    document.getElementById('link_project_2').style.color = "#ffd8a6";
    document.getElementById('link_project_3').style.color = "#ffd8a6";
}

function mouseover3() {
    document.getElementById('link_project_4').style.color = "#ffd8a6";
    document.getElementById('link_project_5').style.color = "#ffd8a6";
}


// onmouseout 
function mouseout1() {
    document.getElementById('link_project_1').style.color = "#039be5";
}

function mouseout2() {
    document.getElementById('link_project_2').style.color = "#039be5";
    document.getElementById('link_project_3').style.color = "#039be5";
}

function mouseout3() {
    document.getElementById('link_project_4').style.color = "#039be5";
    document.getElementById('link_project_5').style.color = "#039be5";
}