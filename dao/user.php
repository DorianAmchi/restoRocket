<?php

function create_user($newUser) {
    $users = get_users();
    $is_Exist = false;
    foreach ($users as $user) {
        foreach ($user as $key => $value) {
            if ($key == "username" && $value == $newUser['username']) {
                $is_Exist = true;
            }
        }
    }
    if (!$is_Exist) {
        echo 'bijour';
        add_user($newUser);
        return true;
    } else {
        return false;
    }
}

function get_user($id) {
    $users = get_users();
    foreach ($users as $user) {
        foreach ($user as $key => $value) {
            if ($key == "id" && $value == $id) {
                return $user;
            }
        }
    }
    return false;
}

function delete_user($id) {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "DELETE FROM USERS WHERE ID=" . $id;
    $dbh->query($request);
}

function update_user($id) {
}

function add_user($user) {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "insert into USERS (username, password, email) "
            . "VALUES('" . $user['username'] . "','" . $user['password'] . "','" . $user['email'] . "')";
    $dbh->exec($request);
    echo $request;
}

function get_users() {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "SELECT * FROM USERS";
    $statement = $dbh->query($request);
    $users = $statement->fetchAll();
    return $users;
}
