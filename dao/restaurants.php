<?php

function create_restaurant($newRestaurant) {
    $restaurants = get_restaurants();
    $is_Exist = false;
    foreach ($restaurants as $restaurant) {
        foreach ($restaurant as $key => $value) {
            if ($key == 'nom' && $value == $newRestaurant['nom']) {
                $is_Exist = true;
                echo 'tomate';
            }
        }
    }
    if (!$is_Exist) {
        add_restaurant($newRestaurant);
        return true;
    } else {
        return false;
    }
}

function get_restaurant($id) {
    $restaurants = get_restaurants();
    foreach ($restaurants as $restaurant) {
        foreach ($restaurant as $key => $value) {
            if ($key == "id" && $value == $id) {
                return $restaurant;
            }
        }
    }
    return false;
}

function delete_restaurant($id) {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "DELETE FROM restaurants WHERE ID=" . $id;
    $dbh->query($request);
}

function update_user($id) {
}

function add_restaurant($restaurant) {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "insert into restaurants (nom, adresse, email, tel) "
            . "VALUES('" . $restaurant['nom'] . "','" . $restaurant['adresse'] . "','" . $restaurant['email'] . "','" .$restaurant['tel']. "')";
    $dbh->exec($request);
    echo $request;
}

function get_restaurants() {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "SELECT * FROM restaurants";
    $statement = $dbh->query($request);
    $restaurants = $statement->fetchAll();
    return $restaurants;
}
