<?php

/* fopen : Ouvre un fichier , r+ : Ouvre en lecture et écriture, et place le pointeur du fichier au début du fichier.  */
$file_txt = fopen('../compteur-page-cfe.txt', 'r+');
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
$count_views = 'Cette page a été vue ' . $number_views . ' fois !';
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
    $number_visitors = 'Il y a ' . $visitors->countIp() . ' visiteur en ligne';
}else{
    $number_visitors = 'Il y a ' . $visitors->countIp() . ' visiteurs en ligne';
}