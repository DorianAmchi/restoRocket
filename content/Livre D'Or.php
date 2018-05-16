<div class='container col-md-auto page'>
    <div class="row">
        <img  class="img-fluid wallpaper" src= "/img/tableaunoir.jpg">
        <h3 class="text-center txtLivre">Livre D'Or</h3>
    </div>
    <div class='row justify-content-md-center gestionCarte'>
        <?php include 'scripts/getMessages.php'; ?>
        <div class='col text-center formLivre'>
            <form method="post" action="scripts/addmessage.php">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Partager votre expérience, laisser un message.</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="newMsg" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Poster</button>
            </form>
        </div>
    </div>
</div>