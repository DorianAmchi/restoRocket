<?php

$nom = $_POST['nomResto'];
$code = $_POST['codePostalResto'];
$ville = $_POST['villeResto'];
$adresse = $_POST['adresseResto'];

if($nom == "" && $code == "" && $ville == "" && $adresse == ""){
$_SESSION['restoIsNew'] = FALSE;
echo 'lloll';
}else {
    echo 'lol';
    $url = "http://192.168.1.54:12100/resto/add";
    $data = http_build_query(array(
        'nom' => $_POST['nomResto'],
        'codePostal' => $_POST['codePostalResto'],
        'ville' => $_POST['villeResto'],
        'adresse' => $_POST['adresseResto']));

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    curl_setopt($ch, CURLOPT_HEADER, 0);

    $output = curl_exec($ch);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    header('Location: http://php-decouverte.bwb/?page=Cartes');
}
