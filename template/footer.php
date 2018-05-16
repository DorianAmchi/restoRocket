<script type="text/javascript" src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script> 
<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin = "anonymous"></script>

<?php
if ($_SESSION['modal']) {
    ?><script type='text/javascript'>
        $(document).ready(function () {
            $('#modalResult').modal('toggle');
        });</script><?php
    $_SESSION['modal'] = !$_SESSION['modal'];
}
if (isset($_GET['resto'])) {
    ?><script type = 'text/javascript'>
            $(document).ready(function () {
                $('#modalCartes').modal('toggle');
            });</script><?php
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>