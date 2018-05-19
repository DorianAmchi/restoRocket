<?php
/*
 * Ce fichier va nous permettre d'initialiser nos données en créant la db et la table qui vont avec . 
 * Pour ce faire, les requetes sont enregistrées dans un fihcier dédies nommé database.sql
 */

//On récupère le contenu du fichier ciblé sous forme de chaîne de caractères.
$sql = file_get_contents("../../db/database.sql");
$dbh = new PDO('mysql:host=localhost;','dorian','');
$dbh ->exec($sql);
echo $sql;

include '../../db/plats.php';
var_dump(get_plat());
