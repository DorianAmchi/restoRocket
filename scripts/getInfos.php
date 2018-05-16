<?php

function getRestaurants() {
    $urlResto = "http://192.168.1.54:12100/resto/get";

    $outputResto = curlGet($urlResto);

    $params = array(
        'id' => array(),
        'nom' => array(),
        'codePostal' => array(),
        'ville' => array(),
        'adresse' => array());

    foreach ($outputResto as $resto) {
        foreach ($resto as $key => $value) {
            $tempParam = customSwitch($key, $value, $params);
            $params = $tempParam;
        }
    }
    $_SESSION['restaurants'] = $params;
}

function getCartes() {
    
}

function curlGet($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_HEADER, 0);

    $output = json_decode(curl_exec($ch));

    return $output;
}

function customSwitch($key, $value, $params) {
    foreach ($params as $k => $v) {
        if ($k == $key) {
            array_push($params[$k], $value);
            echo '<br>';
            break;
        }
    }
    return $params;
}

function affichageSession() {
    var_dump($_SESSION);
}
