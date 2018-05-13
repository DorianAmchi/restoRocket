

<?php

session_start();

if (isset($_POST['usernameCo']) && isset($_POST['passwordCo'])) {
    $url = "http://192.168.1.24:12000/verify";
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

    if ($output === FALSE) {
        $_SESSION['connexion']=false;
    } else {
        $_SESSION['connexion']=true;
        $_SESSION['username']=$_POST['usernameCo'];
    }
    
} else if (isset($_POST['usernameIn']) && isset($_POST['passwordIn'])) {
    $url = "http://192.168.1.24:12000/adduser";
    $data = http_build_query(array(
        'username' => $_POST['usernameIn'],
        'password' => $_POST['passwordIn']));

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $output = curl_exec($ch);

    if ($output === FALSE) {
        $_SESSION['inscription']=false;
    } else {
        $_SESSION['inscritpion']=true;
    }
}

header('Location: http://php-decouverte.bwb/');
?>