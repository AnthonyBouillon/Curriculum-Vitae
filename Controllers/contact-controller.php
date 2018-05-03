<?php

$visitors = new visitors();
$visitors->ip = $_SERVER['REMOTE_ADDR'];
$visitors->timestamp = time();

if ($visitors->countIpbyIp() == 0){
    $visitors->createIp();
}else{
    $visitors->updateTimestamp();
}
// On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
$visitors->timestamp_before_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
$visitors->deleteVisitors();
if ($visitors->countIp() == 1){
    $number_visitors = 'Il y a ' . $visitors->countIp() . ' visiteur en ligne';
}else{
    $number_visitors = 'Il y a ' . $visitors->countIp() . ' visiteurs en ligne';
}

$monfichier = fopen('../compteur-page-contact.txt', 'r+');
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier);
$compteur_visite = 'Cette page a été vue ' . $pages_vues . ' fois !';
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
            $error['name_regex'] = 'Veuillez saisir un nom valide';
        }
    }
    if(empty($_POST['first_name'])){
        $error['first_name'] = 'Veuillez saisir votre prénom';
    }else{
        if(!filter_var($_POST['first_name'], FILTER_SANITIZE_STRING)){
            $error['first_name_regex'] = 'Veuillez saisir un prénom valide';
        }
    }
    if(empty($_POST['mail'])){
        $error['mail'] = 'Veuillez saisir votre mail';
    }else{
        if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            $error['mail_regex'] = 'Veuillez saisir une adresse e-mail valide';
        }
    }
    if(empty($_POST['subject'])){
        $error['subject'] = 'Veuillez saisir un sujet';
    }else{
        if(!filter_var($_POST['subject'], FILTER_SANITIZE_STRING)){
            $error['subject_regex'] = 'Veuillez saisir un nom de sujet valide';
        } 
    }
    if(empty($_POST['text'])){
        $error['text'] = 'Veuillez saisir votre message';
    }else{
        if(!filter_var($_POST['text'], FILTER_SANITIZE_STRING)){
            $error['text_regex'] = 'Veuillez saisir un message valide';
        } 
    }
    if(count($error) === 0){
        $to      = 'anthonybouilloncontact@gmail.com';
        $subject = $_POST['subject'];
        $message = $_POST['text'];
        $headers = $_POST['mail'];

        if(mail($to, $subject, $message, $headers)){
            $success['send_mail'] = 'Votre mail a était envoyez avec succès !';
        }else{
            $error['fail_mail'] = 'Malheureusement le mail n\'a pas put être envoyé';
        }
    }
}


