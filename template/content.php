<?php

if (!isset($_GET["page"])) {
    include $_SERVER['DOCUMENT_ROOT'] . '/content/Home.php';
} else {
    include $_SERVER['DOCUMENT_ROOT'] . '/content/' . $_GET["page"] . '.php';
}
?>