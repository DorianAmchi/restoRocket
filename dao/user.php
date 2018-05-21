<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/functions.php';

if (isset($_POST['function2call']) && !empty($_POST['function2call'])) {
    $function2call = $_POST['function2call'];
    $user = $_POST['user'];
    switch ($function2call) {
        case 'create_user' :
            $url = redirect_user(create_user($user), "in", $user['username']);
            break;
        case 'log_user' :
            $url = redirect_user(log_user($user), "co", $user['username']);
            break;
    }
    echo $url;
}

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

function log_user($userToLog) {
    $users = get_users();
    $is_Exist = false;
    foreach ($users as $user) {
        if ($user['username'] == $userToLog['username'] && $user['password'] == $userToLog['password']) {
            $is_Exist = true;
        }
    }
    return $is_Exist;
}

function delete_user($id) {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "DELETE FROM users WHERE ID=" . $id;
    $dbh->query($request);
}

function update_user($id) {
    
}

function add_user($user) {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "insert into users (username, password, email) "
            . "VALUES('" . $user['username'] . "','" . $user['password'] . "','" . $user['email'] . "')";
    $dbh->exec($request);
}

function get_users() {
    $dbh = new PDO('mysql:host=localhost;dbname=RESTO_DB_BWB', 'root', '');
    $request = "SELECT * FROM users";
    $statement = $dbh->query($request);
    $users = $statement->fetchAll();
    return $users;
}
