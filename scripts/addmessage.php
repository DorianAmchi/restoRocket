<?php

session_start();

$username = $_SESSION['username'];
$newMsg = $_POST['newMsg'];
$date = date("m.d.y");

$data = http_build_query(array(
    "content" => $newMsg,
    "username" => $username,
    "date" => $date
        ));

$url = "http://192.168.1.54:12110/msg/add";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);

header('Location: http://php-decouverte.bwb/?page=Livre%20D%27Or');

