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
        if ($entry != "." && $entry != ".." && $entry !== "404.php") {
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
      <form class="form-inline">
        <button class="btn btn-outline-info my-2 my-sm-0" type="button" data-toggle="modal" data-target="#modalConnexion">Connexion</button>
      </form>
    </div>
  </nav>
