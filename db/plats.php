<?php
 function get_plat(){
     $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB','root','');
     $request = "SELECT * FROM PLATS";
     $statement = $dbh->query($request);
     $plats = $statement->fetchAll();
     return $plats;
 }
