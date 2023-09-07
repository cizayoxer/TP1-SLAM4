<?php
    $nb = $_POST['count'];

    $phrase = $_POST['sentence'];

    setcookie('sentence',$phrase);

    echo "<div class='tableau'>";

    for($i=0; $i<$nb; $i++){
        echo $_COOKIE["sentence"] . "<br>";
    }
    echo "</div>";