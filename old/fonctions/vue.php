<?php

function getNavBar() {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <?php
                $dossier = opendir('content/');
                $name = '';
                while (false !== ($entry = readdir($dossier))) {
                    if ($entry != "." && $entry != ".." && $entry !== "modalUser.php" && $entry !== "modalCartes.php") {
                        $name = basename($entry, ".php");
                        if ($name == "Home") {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/"><?= $name ?></a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/?page=<?= $name ?>"><?= $name ?></a>
                            </li>
                            <?php
                        }
                    }
                }
                ?>
            </ul>
            <?php
            if ($_SESSION['connexion'] === true) {
                ?>
                <h4><?= $_SESSION['username'] ?></h4>
                <form class="form-inline" action="scripts/deconnexion.php">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Deconnexion</button>
                </form>
                <?php
            } else {
                ?>
                <form class="form-inline">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="button" data-toggle="modal" data-target="#modalConnexion">Connexion</button>
                </form>
                <?php
            }
            ?>
        </div>
    </nav>
    <?php
}

function getVueResto($id, $nom, $code, $ville, $adresse) {
    ?>
    <div class="accordion" id="accordion1">
        <?php
        for ($i = 0; $i < count($id); $i++) {
            $idR = $id[$i];
            ?>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= 'R' . $idR ?>" aria-expanded="true" aria-controls="collapseOne">
                            <?= $nom[$i] ?>
                        </button>
                    </h5>
                </div>

                <div id="collapse<?= 'R' . $idR ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <form class="form-inline" action="/?page=Cartes&&resto=<?= $id[$i] ?>">
                        <a href="/?page=Cartes&resto=<?= $id[$i] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter Une Carte</a>
                    </form>           
                    <?php
                    getVueCarte($idR);
                    ?>

                </div>
            </div>
        <?php } ?>
    </div>
    <?php
}

function getVueCarte($idResto) {
    $idRestoC = $_SESSION['idRestoC'];
    $nomCarte = $_SESSION['nomCarte'];
    $idCarte = $_SESSION['idCarte'];
    ?>
    <div class="accordion" id="accordion1">
        <?php
        for ($j = 0; $j < count($idCarte); $j++) {
            echo 'bonjour';
            if ($idRestoC[$j] == $idResto) {
                echo $idRestoC[$j];
                $idC = $idCarte[$j];
                $idC = 'C' . $idC;
                ?>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $idC ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?= $nomCarte[$j] ?>
                            </button>
                        </h5>
                    </div>

                    <div id="collapse<?= $idC ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">


                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div> <?php
}
