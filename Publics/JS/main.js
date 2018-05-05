/* Heure */
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
    id_hour.innerHTML = hour + minutes + seconds;
}
setInterval(actualiser, 0);

/* Date */
var id_date = document.getElementById('date');
var now = new Date();
var simple_day = now.getDate();
var condition = now.getDate() < 10 ? '0' : '';
var day = condition + simple_day;
var simple_month = now.getMonth() + 1;
var condition = now.getMonth() < 10 ? '0' : '';
var month = condition + simple_month;
var year = now.getFullYear();
id_date.innerHTML = day + "/" + month + "/" + year + " à ";

/* Menu, Materialize */
var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem);
var elem = document.querySelector('.dropdown-trigger');
var instance = M.Dropdown.init(elem);

/* Formulaire de contact */
function validate_Form() {
    var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;

    var name = document.getElementById('name');
    var first_name = document.getElementById('first_name');
    var mail = document.getElementById('mail');
    var subject = document.getElementById('subject');
    var text = document.getElementById('text');

    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');

    error[0] = document.getElementById('error_name');
    error[1] = document.getElementById('error_first_name');
    error[2] = document.getElementById('error_mail');
    error[3] = document.getElementById('error_subject');
    error[4] = document.getElementById('error_message');

    success[0] = document.getElementById('error_name');
    success[1] = document.getElementById('error_first_name');
    success[2] = document.getElementById('error_mail');
    success[3] = document.getElementById('error_subject');
    success[4] = document.getElementById('error_message');

    if (name.value === '') {
        error[0].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[0].style.color = 'red';
    } else {
        success[0].innerHTML = 'Correct';
        success[0].style.color = 'green';
    }

    if (first_name.value === '') {
        error[1].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[1].style.color = 'red';
    } else {
        success[1].innerHTML = 'Correct';
        success[1].style.color = 'green';
    }

    if (mail.value != '') {
        if (expressionReguliere.test(mail.value)) {
            success[2].innerHTML = 'Mail valide';
            success[2].style.color = 'green';
        } else {
            error[2].innerHTML = 'Mail invalide';
            error[2].style.color = 'red';
        }
    } else {
        error[2].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[2].style.color = 'red';
    }

    if (subject.value === '') {
        error[3].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[3].style.color = 'red';
    } else {
        success[3].innerHTML = 'Correct';
        success[3].style.color = 'green';
    }

    if (text.value === '') {
        error[4].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[4].style.color = 'red';
    } else {
        success[4].innerHTML = 'Correct';
        success[4].style.color = 'green';
    }
    if (name.value != '' && first_name.value != '' && mail.value != '' && subject.value != '' && text.value != '' && expressionReguliere.test(mail.value)) {
        return true;
    } else {
        return false;
    }

}
/* onblur sur formulaire */
function form_name() {
    var name = document.getElementById('name');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[0] = document.getElementById('error_name');
    error[0] = document.getElementById('error_name');
    if (name.value === '') {
        error[0].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[0].style.color = 'red';
    } else {
        success[0].innerHTML = 'Correct';
        success[0].style.color = 'green';
    }
}

function form_first_name() {
    var first_name = document.getElementById('first_name');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[1] = document.getElementById('error_first_name');
    error[1] = document.getElementById('error_first_name');
    if (first_name.value === '') {
        error[1].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[1].style.color = 'red';
    } else {
        success[1].innerHTML = 'Correct';
        success[1].style.color = 'green';
    }
}

function form_mail() {
    var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
    var mail = document.getElementById('mail');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[2] = document.getElementById('error_mail');
    error[2] = document.getElementById('error_mail');
    if (mail.value != '') {
        if (expressionReguliere.test(mail.value)) {
            success[2].innerHTML = 'Mail valide';
            success[2].style.color = 'green';
        } else {
            error[2].innerHTML = 'Mail invalide';
            error[2].style.color = 'red';
        }
    } else {
        error[2].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[2].style.color = 'red';
    }
}

function form_subject() {
    var subject = document.getElementById('subject');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[3] = document.getElementById('error_subject');
    error[3] = document.getElementById('error_subject');
    if (subject.value === '') {
        error[3].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[3].style.color = 'red';
    } else {
        success[3].innerHTML = 'Correct';
        success[3].style.color = 'green';
    }
}

function form_text() {
    var text = document.getElementById('text');
    var error = new Array('0', '1', '2', '3', '4');
    var success = new Array('0', '1', '2', '3', '4');
    success[4] = document.getElementById('error_message');
    error[4] = document.getElementById('error_message');
    if (text.value === '') {
        error[4].innerHTML = 'Veuillez remplir ce champ avant de valider';
        error[4].style.color = 'red';
    } else {
        success[4].innerHTML = 'Correct';
        success[4].style.color = 'green';
    }
}