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
        if (isset($_SESSION['user'])) {
            ?> 
            <h4><?= $_SESSION['user'] ?></h4> 
            <form class="form-inline" action="/scripts/php/deconnexion.php"> 
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Deconnexion</button> 
            </form> 
            <?php
        } else if (isset($_GET['user'])) {
            ?> 
            <h4><?= $_GET['user'] ?></h4> 
            <form class="form-inline" action="/scripts/php/deconnexion.php"> 
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