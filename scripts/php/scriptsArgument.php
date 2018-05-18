<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/template/modal.php';

// On stocke le nom d'utilisateur dans une variable de SESSION.
if (isset($_GET['user'])) {
    $_SESSION['user'] = $_GET['user'];
}

// On stocke la valeur de connexion dans une variable de SESSION. On unset inscription pour ne pas avoir de bug en affichage modal.
if (isset($_GET['co'])) {
    $_SESSION['connexion'] = $_GET['co'];
    unset($_SESSION['inscription']);
}

// On stocke la valeur d'inscription dans une variable de SESSION. On unset connexion pour ne pas avoir de bug en affichage modal.
if (isset($_GET['in'])) {
    $_SESSION['inscription'] = $_GET['in'];
    unset($_SESSION['connexion']);
}

// Block de condition traitant l'affichage de la modal et l'affiche onload.
if (!isset($_SESSION['connexion']) && !isset($_SESSION['inscription'])) {
    modalInscription();
    modalConnexion();
} else {
    if (isset($_SESSION['connexion']) || $_SESSION['inscription']==="TRUE") {
        modalConnexion();
        modalInscription();
        onloadModalCo();
    } else if (isset($_SESSION['inscription']) && $_SESSION['inscription']==="FALSE") {
        modalConnexion();
        modalInscription();
        onloadModalIn();
    }
}

function onloadModalCo() {
    modalConnexion();
    ?><script type='text/javascript'>
        $(document).ready(function () {
            $('#modalConnexion').modal('toggle');
        });</script><?php
        
}

function onloadModalIn() {
    modalInscription();
    ?><script type='text/javascript'>
            $(document).ready(function () {
                $('#modalInscription').modal('toggle');
            });</script><?php
}
