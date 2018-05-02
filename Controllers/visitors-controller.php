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
