<?php 
$urlCartes = "http://192.168.1.54:12100/carte/get";

$chCartes = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HEADER, 0);

$outputCartes = json_decode(curl_exec($chCartes));

$nomCarte = array();
$idRestoC = array();
$idCarte = array();

foreach ($output as $carte) {
    foreach ($cartes as $key => $value) {
        if ($key == "idResto") {
            array_push($idRestoC, $value);
        }
        if ($key == "nomCarte") {
            array_push($nomCarte, $value);
        }
        if ($key == "id") {
            array_push($idCarte, $value);
        }
    }
}

$_SESSION['idRestoC'] = $idRestoC;
$_SESSION['nomCarte'] = $nomCarte;
$_SESSION['idCarte'] = $idCarte;

