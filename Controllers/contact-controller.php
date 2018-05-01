<?php
/*
 * Vérification de la soumission du formulaire
 * Vérification de l'existence des champs
 * Vérification de la valeur des champs
 * Envoi
 * Vérification de l'envoi
 */ 
$error = array();
$success = array();

if(isset($_POST['submit_mail'])){
    if(empty($_POST['name'])){
        $error['name'] = 'Veuillez saisir votre nom';
    }else{
        if(!filter_var($_POST['name'], FILTER_SANITIZE_STRING)){
            $error['name'] = 'Veuillez saisir un nom valide';
        }
    }
    if(empty($_POST['first_name'])){
        $error['first_name'] = 'Veuillez saisir votre prénom';
    }else{
        if(!filter_var($_POST['first_name'], FILTER_SANITIZE_STRING)){
            $error['first_name'] = 'Veuillez saisir un prénom valide';
        }
    }
    if(empty($_POST['mail'])){
        $error['mail'] = 'Veuillez saisir votre mail';
    }else{
        if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            $error['mail'] = 'Veuillez saisir une adresse e-mail valide';
        }
    }
    if(empty($_POST['subject'])){
        $error['subject'] = 'Veuillez saisir un sujet';
    }else{
        if(!filter_var($_POST['subject'], FILTER_SANITIZE_STRING)){
            $error['subject'] = 'Veuillez saisir un nom de sujet valide';
        } 
    }
    if(empty($_POST['text'])){
        $error['text'] = 'Veuillez saisir votre message';
    }else{
        if(!filter_var($_POST['text'], FILTER_SANITIZE_STRING)){
            $error['text'] = 'Veuillez saisir un message valide';
        } 
    }
    if(count($error) === 0){
        $to      = 'anthonybouilloncontact@gmail.com';
        $subject = $_POST['subject'];
        $message = $_POST['text'];
        $headers = $_POST['mail'];

        if(mail($to, $subject, $message, $headers)){
            $success['send_mail'] = 'Votre mail a était envoyez avec succès';
        }
    }
}


