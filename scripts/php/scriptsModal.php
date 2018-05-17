<?php

include $_SERVER['DOCUMENT_ROOT'].'/template/modal.php';
modalInscription();
modalConnexion();

if(isset($_SESSION['resultUser'])){
    scriptModalResult();
}

function scriptModalResult() {
    ?><script type='text/javascript'>
            $(document).ready(function () {
                $('#modalResult').modal('toggle');
            });</script><?php
}
