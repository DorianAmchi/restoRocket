<?php
//Script de Déconnexion qui détruit la session et redirige vers l'accueil.
session_start();
session_destroy();

header('Location: http://resto-rocket.bwb/');