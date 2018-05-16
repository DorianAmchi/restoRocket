<div id="modalResto" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bienvenue sur le gestionnaire de cartes.<br> Veuillez ajouter votre restaurant.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="/scripts/addRestaurant.php">
                    <div class="row">
                        <input class="form-control mr-sm-2" name="nomResto" placeholder="Nom Du Restaurant" aria-label="Username">
                        <input class="form-control mr-sm-2" name="adresseResto" placeholder="Adresse Du Restaurant" aria-label="Password">
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="codePostalResto" placeholder="Code Postal">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="villeResto" placeholder="Ville">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Ajouté</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#modalInscription">Inscription</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div id="modalCartes" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                $id = $_GET['resto'];
                $pos = array_search($id, $_SESSION['idResto']);
                ?>
                <h5 class="modal-title">Ajouté une carte au restaurant <?= $_SESSION['nomResto'][$pos] ?>.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="/scripts/addCartes.php">
                    <div class="row">
                        <input class="form-control mr-sm-2" name="nomCarte" placeholder="Nom De La Carte" aria-label="Username">
                        <input class="form-control mr-sm-2" type="hidden" name="idResto" value="<?= $id ?>">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Ajouté</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
