<?php

/* fopen : Ouvre un fichier , r+ : Ouvre en lecture et écriture, et place le pointeur du fichier au début du fichier.  */
$file_txt = fopen('../compteur-page-contact.txt', 'r+');
/* fgets : Récupère la ligne courante sur laquelle se trouve le pointeur du fichier, donc la première ligne. */
$number_views = fgets($file_txt);
// On incrémente de 1 à chaque fois que la page s'actualise.
$number_views = $number_views + 1; 
// fseek : Modifie la position du pointeur de fichier (0 = début du fichié).
fseek($file_txt, 0); 
// fwrite : Écrit un fichier en mode binaire, donc 1 2 3 4 etc.
fwrite($file_txt, $number_views); 
// PHP ferme automatiquement le fichier.
// On affiche le nombre de vue d'une page.
$count_views = 'Cette page a été vues : ' . $number_views . ' fois';
/*
 * Instancie l'objet visitors().
 * Assigne l'adresse ip dans l'attribut ip de l'objet visitors().
 * Assigne le timestamp dans l'attribut timestamp de l'objet visitors().
 */
$visitors = new visitors();
$visitors->ip = $_SERVER['REMOTE_ADDR'];
$visitors->timestamp = time();
/*
 * Si l'adresse ip de l'utilisateur n'existe pas,
 * on insert l'adresse ip et le timestamp de l'utilisateur dans la base de données.
 * Si l'adresse ip existe déjà,
 * on modifie son timestamp dans la base de données.
 */
if ($visitors->countIpbyIp() == 0){
    $visitors->createIp();
}else{
    $visitors->updateTimestamp();
}
/* On stocke dans un attribut de l'objet visitors() le timestamp qu'il était il y a 5 minutes :
 * timestamp actuel - (60 * 5) donc 60 secondes fois 5 = 5 minutes,
 * ce qui fait le timestamps actuel - 5 minutes.
 */
$visitors->timestamp_before_5min = time() - (60 * 5); 
// Supprime le visiteurs datant de plus de 5 minutes.
$visitors->deleteVisitors();
/*
 * Si le nombre d'adresse ip total est égale à 1 : visitor sans "S",
 * sinon visitors avec un "S".
 */
if ($visitors->countIp() == 1){
    $number_visitors = 'Visiteur en ligne : ' . $visitors->countIp();
}else{
    $number_visitors = 'Visiteurs en ligne : ' . $visitors->countIp();
}

// Assigne un tableau vide dans une variable, cela servira à personnaliser les messages d'erreurs et de succès.
$error = array();
$success = array();
// Si le formulaire a était soumis
if(isset($_POST['submit_mail'])){
    /*
     * Si le champ est vide,
     * affiche un message d'erreur.
     * 
     * Sinon,
     * si le champ n'est pas vide et que le filtre ne correspond pas,
     * affiche un message d'erreur.
     */ 
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
    /*
     * Si le formulaire ne comporte aucune erreur,
     * assigne l'adresse e-mail du destinataire,
     * assigne le sujet, le message et l'adresse e-mail de l'utilisateur.
     */ 
    if(count($error) === 0){
        $to      = 'anthony-bouillon@outlook.fr';
        $subject = $_POST['subject'];
        $message = $_POST['text'];
        $headers = $_POST['mail'];
        /*
         * Vérifie si le mail a était envoyé avec succcès.
         * Si oui,
         * affiche un message de succès.
         * Si non,
         * affiche un message d'erreur.
         */ 
        if(mail($to, $subject, $message, $headers)){
            $success['send_mail'] = 'Votre mail a était envoyez avec succès !';
        }else{
            $error['fail_mail'] = 'Malheureusement le mail n\'a pas put être envoyé, réessayez plus tard';
        }
    }
}



