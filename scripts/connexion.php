<?php

session_start();

if (isset($_POST['usernameCo']) && isset($_POST['passwordCo'])) {
    unset($_SESSION['inscription']);
    if ($_POST['usernameCo'] === "") {
        $_SESSION['connexion'] = FALSE;
    } else {
        $url = "http://192.168.1.54:12108/verify";
        $data = http_build_query(array(
            'username' => $_POST['usernameCo'],
            'password' => $_POST['passwordCo']));
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        curl_setopt($ch, CURLOPT_HEADER, 0);

        $output = curl_exec($ch);

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpCode === 200) {
            $_SESSION['connexion'] = TRUE;
            $_SESSION['username'] = $_POST['usernameCo'];
        } else {
            $_SESSION['connexion'] = FALSE;
        }
    }
} else if (isset($_POST['usernameIn']) && isset($_POST['passwordIn'])) {
    if ($_POST['usernameIn'] === "" || $_POST['passwordIn'] === "") {
        $_SESSION['inscription'] = FALSE;
    } else {

        unset($_SESSION['connexion']);
        $url = "http://192.168.1.54:12108/adduser";
        $data = http_build_query(array(
            'username' => $_POST['usernameIn'],
            'password' => $_POST['passwordIn']));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $output = curl_exec($ch);

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpCode === 200) {
            $_SESSION['inscription'] = TRUE;
        } else {
            $_SESSION['inscription'] = FALSE;
        }
    }
}

$_SESSION['modal'] = TRUE;
header('Location: http://php-decouverte.bwb/');
?>