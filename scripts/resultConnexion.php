<?php
session_start();
if (isset($_SESSION['inscription'])) {
    if ($_SESSION['inscription']) {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">Votre inscription à bien été validé.<br>Merci de vous connecter pour profité de nos service.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="form-inline" method="post" action="/scripts/connexion.php">
                <input class="form-control mr-sm-2" name="usernameCo" placeholder="Username" aria-label="Username">
                <input class="form-control mr-sm-2" name="passwordCo" placeholder="Password" aria-label="Password">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Connexion</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

        <?php
    } else {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">L'identifiant est deja utilisé ou est invalide.<br> Merci de réessayer avec un nouveau.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="form-inline" method="post" action="/scripts/connexion.php">
                <input class="form-control mr-sm-2" name="usernameIn" placeholder="Username" aria-label="Username">
                <input class="form-control mr-sm-2" name="passwordIn" placeholder="Password" aria-label="Password">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Inscription</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#modalInscription">Close</button>
                </div>
            </form>
        </div>
        <?php
    }
} else if (isset($_SESSION['connexion'])) {
    if ($_SESSION['connexion']) {
        ?>
        <div class="modal-header">
            <h5 class="modal-title"><?= $_SESSION['username'] ?> !<br> Bienvenue sur Restologue.<br>Vous pouvez désormais profité de nos services.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    } else {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">Erreur lors de la saisie des identifiants.<br>Merci de bien vouloir réésayer.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="form-inline" method="post" action="/scripts/connexion.php">
                <input class="form-control mr-sm-2" name="usernameCo" placeholder="Username" aria-label="Username">
                <input class="form-control mr-sm-2" name="passwordCo" placeholder="Password" aria-label="Password">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Connexion</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        <?php
    }
}

