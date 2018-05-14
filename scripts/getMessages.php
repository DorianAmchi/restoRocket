<?php
$url = "http://192.168.1.46:3000/msg/get";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HEADER, 0);

$output = json_decode(curl_exec($ch));

$msg = array();
$date = array();
$autor = array();

foreach ($output as $messages) {
    foreach ($messages as $key => $value) {
        if ($key == "content") {
            array_push($msg, $value);
        }
        if ($key == "username") {
            array_push($autor, $value);
        }
        if ($key == "date") {
            array_push($date, $value);
        }
    }
}
?><div class='col text-center msgLivre'><?php
for ($i = 0; $i < count($msg); $i++) {
    if ($i % 2 == 0) {
        ?>
            <div class='message'>
                <h3 class='msg'><?= $msg[$i] ?></h3>
                <h5 class='autor'><?= $autor[$i] ?></h5>
                <h5 class='date'><?= $date[$i] ?></h5>
            </div>            
            <?php
        }
    }
    ?>
</div> 
<div class='col text-center msgLivre'><?php
    for ($i = 0; $i < count($msg); $i++) {
        if ($i % 2 == 1) {
            ?>
            <div class='message'>
                <h3 class='msg'><?= $msg[$i] ?></h3>
                <h5 class='autor'><?= $autor[$i] ?></h5>
                <h5 class='date'><?= $date[$i] ?></h5>
            </div>

            <?php
        }
    }
    ?>
</div>

