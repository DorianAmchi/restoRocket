<?php

//Regroupement des modals
//Modal de Connexion
function modalConnexion() {
    ?>
    <div id="modalConnexion" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php
                $modal = 'co';
                modalContent($modal);
                ?>
            </div>
        </div>
    </div>
    <?php
}

//Modal d'Inscription
function modalInscription() {
    ?>
    <div id="modalInscription" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <?php
            $modal = 'in';
            modalContent($modal);
            ?>
        </div>
    </div>
    <?php
}

function modalContent($modal) {
    /*
     *  modalContent permet de remplir les modals.
     *    $modal -> 2 valeurs possible pour 2 modal à remplir. co pour modalConnexion, in pour modalInscription.  
     */
    if ($modal === 'co') {
        /*
         * Si $_SESSION['connexion'] est set, alors l'utilisateur à deja tenté de se connecter.
         * Il y a alors 2 possibilités isset ou isnotset: 
         *   -   Pour isset : Si $_SESSION['connexion'] est vrai on affiche connexionTRUE() dans la modal sinon on affiche connexionFALSE()
         *   -   Pour isnotset : Si $_SESSION['inscription'] est vrai l'utilisateurs a valider son inscription on affiche inscriptionTRUE() sinon firstConnexion();
         */
        (isset($_SESSION['connexion'])) ?
                        ($_SESSION['connexion'] === "TRUE" ?
                                connexionTRUE() : connexionFALSE()) : ((isset($_SESSION['inscription']) && $_SESSION['inscription']) === "TRUE" ?
                                inscriptionTRUE() : firstConnexion());
    } else if ($modal === 'in') {
        /*
         * Si $_SESSION['inscription'] est set, alors l'utilisateur à deja tenté de s'inscrire.
         * Il y a alors 2 possibilités isset ou isnotset: 
         *   -   Pour isset : Si $_SESSION['inscription'] est vrai on affiche firstInscription() dans la modal sinon on affiche inscriptionFALSE()
         *   -   Pour isnotset : On affiche firstInscription()
         */
        (isset($_SESSION['inscription'])) ? ($_SESSION['inscription'] === "TRUE") ? inscriptionTRUE() : inscriptionFALSE() : firstInscription();
    }
}

function firstConnexion() {
    ?>
    <div class = "modal-header">
        <h5 class = "modal-title">Bienvenue sur Restologue.<br> Veuillez vous connecter.</h5>
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
            <span aria-hidden = "true">&times;
            </span>
        </button>
    </div>
    <div class = "modal-body">
        <input class = "form-control mr-sm-2" id = "logUsername" placeholder = "Username" aria-label = "Username">
        <input class = "form-control mr-sm-2" id = "logPassword" placeholder = "Password" aria-label = "Password">
    </div>
    <div class = "modal-footer">
        <button class = "btn btn-primary" type = "submit" onclick = "logIn()">Connexion</button>
        <button type = "button" class = "btn btn-secondary" data-dismiss = "modal" data-toggle = "modal" data-target = "#modalInscription">Inscription</button>
    </div>
    <?php
}

function firstInscription() {
    ?>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Bienvenue sur Restologue.<br> Veuillez vous inscrire pour profiter de nos services.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input class="form-control mr-sm-2" id="signUsername" placeholder="Username" aria-label="Username">
            <input class="form-control mr-sm-2" id="signPassword" placeholder="Password" aria-label="Password">
            <input class = "form-control mr-sm-2" id = "signEmail" placeholder = "Email" aria-label = "Email">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="signIn()">Inscription</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#modalInscription">Close</button>
        </div>
    </div>
    <?php
}

function connexionTRUE() {
    ?>
    <div class="modal-header">
        <h5 class="modal-title"><?php if (isset($_SESSION['username'])) {
        echo$_SESSION['username'];} ?> !<br> Bienvenue sur Restologue.<br>Vous pouvez désormais profité de nos services.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }

    function connexionFALSE() {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">Erreur lors de la saisie des identifiants.<br>Merci de bien vouloir réésayer.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input class="form-control mr-sm-2" id="logUsername" placeholder="Username" aria-label="Username">
            <input class="form-control mr-sm-2" id="logPassword" placeholder="Password" aria-label="Password">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="logIn()">Connexion</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        <?php
    }

    function inscriptionTRUE() {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">Votre inscription à bien été validé.<br>Merci de vous connecter pour profité de nos service.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input class="form-control mr-sm-2" id="logUsername" placeholder="Username" aria-label="Username">
            <input class="form-control mr-sm-2" id="logPassword" placeholder="Password" aria-label="Password">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="logIn()">Connexion</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        <?php
    }

    function inscriptionFALSE() {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">L'identifiant est deja utilisé ou est invalide.<br> Merci de réessayer avec un nouveau.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input class="form-control mr-sm-2" id="signUsername" placeholder="Username" aria-label="Username">
            <input class="form-control mr-sm-2" id="signPassword" placeholder="Password" aria-label="Password">
            <input class = "form-control mr-sm-2" id = "signEmail" placeholder = "Email" aria-label = "Email">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="signIn()">Inscription</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#modalInscription">Close</button>
        </div>
        <?php
    }
    