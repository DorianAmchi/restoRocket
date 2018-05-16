<?php

session_start();

include 'getInfos.php';

getRestaurants();

affichageSession();

//
//function getRestaurants() {
//    $urlResto = "http://192.168.1.54:12100/resto/get";
//
//    $chResto = curl_init();
//
//    curl_setopt($chResto, CURLOPT_URL, $urlResto);
//
//    curl_setopt($chResto, CURLOPT_RETURNTRANSFER, 1);
//
//    curl_setopt($chResto, CURLOPT_HEADER, 0);
//
//    $outputResto = json_decode(curl_exec($chResto));
//
//    $id = array();
//    $nom = array();
//    $code = array();
//    $ville = array();
//    $adresse = array();
//
//    foreach ($outputResto as $messages) {
//        foreach ($messages as $key => $value) {
//            if ($key == "nom") {
//                array_push($nom, $value);
//            }
//            if ($key == "adresse") {
//                array_push($adresse, $value);
//            }
//            if ($key == "codePostal") {
//                array_push($code, $value);
//            }
//            if ($key == "id") {
//                array_push($id, $value);
//            }
//            if ($key == "ville") {
//                array_push($ville, $value);
//            }
//        }
//    }
//}
//
//$urlCartes = "http://192.168.1.54:12100/carte/get";
//
//$chCartes = curl_init();
//
//curl_setopt($chCartes, CURLOPT_URL, $urlCartes);
//
//curl_setopt($chCartes, CURLOPT_RETURNTRANSFER, 1);
//
//curl_setopt($chCartes, CURLOPT_HEADER, 0);
//
//$outputCartes = json_decode(curl_exec($chCartes));
//
//$nomCarte = array();
//$idRestoC = array();
//$idCarte = array();
//
//foreach ($outputCartes as $carte) {
//    foreach ($cartes as $key => $value) {
//        if ($key == "idResto") {
//            array_push($idRestoC, $value);
//        }
//        if ($key == "nomCarte") {
//            array_push($nomCarte, $value);
//        }
//        if ($key == "id") {
//            array_push($idCarte, $value);
//        }
//    }
//}
//
//$_SESSION['idRestoC'] = $idRestoC;
//$_SESSION['nomCarte'] = $nomCarte;
//$_SESSION['idCarte'] = $idCarte;
//

