<div id="modalConnexion" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bienvenue sur Restologue.<br> Veuillez vous connecter.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline" method="post" action="/scripts/connexion.php">
                    <input class="form-control mr-sm-2" name="usernameCo" placeholder="Username" aria-label="Username">
                    <input class="form-control mr-sm-2" name="passwordCo" placeholder="Password" aria-label="Password">
                    <button class="btn btn-outline-info my-2 my-sm-0" >Connexion</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" type="submit">Connexion</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#modalInscription">Inscription</button>
            </div>
        </div>
    </div>
</div>

<div id="modalInscription" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bienvenue sur Restologue.<br> Veuillez vous inscrire pour profiter de nos services.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline" method="post" action="/scripts/connexion.php">
                    <input class="form-control mr-sm-2" name="usernameIn" placeholder="Username" aria-label="Username">
                    <input class="form-control mr-sm-2" name="passwordIn" placeholder="Password" aria-label="Password">
                    <button class="btn btn-outline-info my-2 my-sm-0" >Connexion</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" type="submit">Inscription</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>