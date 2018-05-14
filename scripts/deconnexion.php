<?php

 echo 'bijour';
session_start();
session_destroy();

header('Location: http://php-decouverte.bwb/');

?>

