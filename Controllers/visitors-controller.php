<?php
$monfichier = fopen('../compteur-page-project.txt', 'r+');
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier);
$compteur_visite = 'Cette page a été vue ' . $pages_vues . ' fois !';

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
