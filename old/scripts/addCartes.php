<?php

$idResto = $_POST['idResto'];
$nomCarte = $_POST['nomCarte'];
echo $idResto;
if($nomCarte == ""){
    echo "banane";
}else {
    $url = "http://192.168.1.54:12100/carte/add";
    $data = http_build_query(array(
        'idResto' => $idResto,
        'nomCarte' => $nomCarte));

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    curl_setopt($ch, CURLOPT_HEADER, 0);

    $output = curl_exec($ch);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

}
