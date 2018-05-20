<?php
include 'user.php';

$user=array(
    'username'=>'dodo',
    'password'=>'dodo'
);
var_dump(log_user($user));
var_dump($user['username']);
var_dump(redirect_user(log_user($user), "co", $user['username']));